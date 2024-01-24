<x-site-layout title="">
    <div class="text-3xl pb-24 items-center italic">ADMIN - CATEGORIES</div>
    <div class="flex justify-end">
        <button class="shadow py-2 px-4 rounded-lg bg-indigo-700 text-lg text-white hover:bg-indigo-600" hef="{{route('admin.categories.create')}}">Create a category</button>
    </div>
    <br/>

    <x-crud-message/>

    <ul class="grid grid-cols-2 gap-4 border rounded-3xl p-4">
        @foreach($categories as $category)

            <li class="flex py-4 bg-gray-300 bg-opacity-25 backdrop-blur-md border border-white rounded-3xl shadow-lg hover:scale-105 duration-500">
                <a class="flex w-4/5 px-4 py-2 text-2xl font-light">
                    {{$category->name}}
                </a>
                <div class="flex w-1/5 gap-4 px-8 items-center justify-end">
                    <a class="rounded-2xl px-4 py-2 bg-black text-white hover:bg-gray-800" href="{{route('admin.categories.show', $category)}}">Show</a>
                    <a class="rounded-2xl px-4 py-2 bg-black text-white hover:bg-gray-800" href="{{route('admin.categories.edit', $category)}}">Edit</a>
                </div>
            </li>

        @endforeach
    </ul>

</x-site-layout>
