<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Categories</div>
    <ul class="grid grid-cols-2 gap-6 rounded-xl">
        @foreach($categories as $category)
            <li class="block text-center items-center p-6 bg-black backdrop-blur-md border border-white rounded-3xl shadow-lg hover:scale-105 duration-500">
                    <h2 class="font-normal text-3xl text-white px-4 py-4" >{{$category->name}}</h2>
                </a>
                <a class="flex justify-between py-4" href="{{route('categories.show', ['id' => $category->id])}}">
                    @foreach($category->posts as $post)
                        <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full rounded-md group-hover:scale-110 transition overflow-hidden duration-500">
                    @endforeach
                </a>
            </li>
        @endforeach
    </ul>

</x-site-layout>
