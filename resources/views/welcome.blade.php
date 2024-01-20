<x-site-layout title="">

    <div class="flex gap-6 ">
        <div class="w-2/3">
            <ul class="grid grid-cols-2 gap-10">
                @foreach($recent_news as $post)
                    <li class="overflow-hidden bg-gray-200 bg-opacity-25 backdrop-blur-lg shadow-md hover:shadow-lg rounded-lg group overflow-hidden duration-500 hover:scale-110">
                        <a href="{{route('posts.show', ['post' => $post])}}" class="rounded bg-reg-500 w-full overflow-hidden">
                            <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full rounded-lg group-hover:scale-110 transition overflow-hidden duration-500">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="w-1/3 px-4">
            <livewire:quotes />
            <br>
            <h1 class="font-bold text-7xl">
                Step into a realm of creativity and imagination at our online art gallery. Explore a curated collection of mesmerizing artworks that transcend boundaries
            </h1>
        </div>

    </div>




</x-site-layout>
