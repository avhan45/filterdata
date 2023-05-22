<div>
    <div class="grid gap-4 space-x-1 md:grid-cols-3" wire:loading.remove>
        @foreach ($post as $item)
            
        <div class="px-2 py-3 bg-white border-2 border-slate-300 rounded">
            <h2 class="text-2xl font-bold text-slate-800">{{$item->title}}</h2>
            <p class="text-slate-600">
                {{$item->description}}
            </p>
            <div class="mb-1">
                <span class="bg-blue-600 text-blue-100 rounded px-1 text-sm">{{$item->category->name}}</span>
            </div>
        </div>
        @endforeach
    </div>
    <div  class="flex item-center justify-center mt-10">
        <div wire:loading style="border-top-color:transparent;"
            class="w-16 h-16 border-4 border-blue-400 border-solid  rounded-full animate-spin">

        </div>

    </div>
</div>
