<x-site-layout title="">
    <div class="text-3xl pb-24 items-center italic">ADMIN - CATEGORIES</div>
    <div class="flex justify-end">
        <button class="shadow py-2 px-4 rounded-lg bg-indigo-700 text-lg text-white hover:bg-indigo-600 " href="{{route('admin.categories.create')}}">Create a category</button>
    </div>

    <x-crud-message/>

    <ul class="grid grid-cols-1 py-9 gap-4">
        @foreach($categories as $category)

            <li class="flex py-4 bg-black rounded-3xl shadow-lg hover:scale-105 duration-500">
                <a class="flex w-4/5 px-4 py-2 text-2xl text-white font-light">
                    {{$category->name}}
                </a>
                <div class="flex w-1/5 gap-4 px-8 items-center justify-end">
                    <a class="rounded-2xl px-4 py-2 bg-white hover:bg-gray-200" href="{{route('admin.categories.show', $category)}}">Show</a>
                    <a class="rounded-2xl px-4 py-2 bg-white hover:bg-gray-200" href="{{route('admin.categories.edit', $category)}}">Edit</a>
                </div>
            </li>

        @endforeach
    </ul>

</x-site-layout>
