<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Categories</div>
    <ul class="grid grid-cols-5 gap-4">
    @foreach($categories as $category)
        <li class="flex p-2 bg-black justify-center rounded-3xl text-white fill-button">
            <a href="{{route('categories.show', ['id' => $category->id])}}">
                {{$category->name}}
            </a>
        </li>
    @endforeach
    </ul>

</x-site-layout>
