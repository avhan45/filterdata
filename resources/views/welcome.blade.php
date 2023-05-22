<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>
<body class="bg-slate-300">
    
    <div class="w-full md:w-9/12 mx-auto mt-10">
        <div class="mb-2">
            <h1 class="text-state-900 text-3xl">Livewire Filters</h1>
        </div>
        <div class="mb-2 flex justify-end">
            {{-- Filter Componen Post --}}
            <livewire:filter-posts />
        </div>
        
        <div class="mb-10">
            {{-- Show Post --}}
            <livewire:show-posts />

        </div>

    </div>

    @livewireScripts
</body>
</html>