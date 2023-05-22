<div>
    <div class="flex item-center gap-2">
        <input wire:model="query" type="text" wire:keyup.debounce="filter" placeholder="Search a Post..." class="border px-2 py-1 rounded w-64" />
        <select wire:model="category_id" wire:change="filter" class="border p-1 text-state-600 text-lg rounded">
            <option value="">Select a Category</option>
            @foreach ($categories as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>
</div>
