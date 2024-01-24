<div class="flex-col justify-center text-xl rounded-lg border border-gray-300 p-9 shadow shadow-md space-y-4">
        <h1 class="font-serif italic pb-4">“{{$quote->quote}}”</h1>
    <div class="">
        <div class="text-gray-300 text-sm py-2">Category: {{$cat}}</div>
        <div class="flex space-x-2">
            @foreach($categories as $category)
                <button class="flex w-full justify-center text-base text-white bg-orange-500 rounded-full border border-gray-300 py-2 px-4 hover:scale-105 duration-500" wire:click="selectCategory('{{$category}}')">{{$category}}</button>
            @endforeach
        </div>
    </div>
    <button class="flex w-full justify-center text-xl text-white bg-black rounded-lg border border-gray-300 p-2 shadow shadow-md hover:bg-gray-700 duration-500" wire:click="$refresh">Refresh</button>
</div>
