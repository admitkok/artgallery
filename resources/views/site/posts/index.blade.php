<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Posts</div>
    <ul class="grid grid-cols-2 gap-10">
    @foreach($posts as $post)
        <li class="grid grid-rows-1 overflow-hidden bg-gray-200 bg-opacity-25 backdrop-blur-lg shadow-md border border-white rounded-lg group overflow-hidden duration-500 hover:scale-110">
            <a href="{{route('posts.show', ['post' => $post])}}" class="bg-reg-500 w-full overflow-hidden">
                <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full group-hover:scale-110 transition overflow-hidden duration-500">
            </a>

            <div class="p-2">
                <div class="col-span-2 p-2">
                    <div class="flex gap-x-2 mb-2">
                        @foreach($post->categories as $category)
                            <a href="{{route('categories.show', ['id' => $category->id])}}" class="fill-button uppercase bg-purple-700 text-white rounded-full py-1 px-4 text-xs">
                                {{$category->name}}
                            </a>
                        @endforeach
                    </div>
                        <a href="{{route('posts.show', ['post' => $post])}}">
                            <h2 class="font-bold text-lg line-clamp-1" >{{$post->title}}</h2>
                            <span class="">{{$post->author?->name ?? 'UNKNOWN AUTHOR' }}</span>
                            <span class="text-orange-500 mx-2">|</span>
                            <span>{{$post->published_at->format('Y-m-d H:i')}}</span>
                            <div class="px-1 pt-2 line-clamp-3">
                                {{ Str::limit( strip_tags($post->body), 40) }}
                            </div>
                        </a>
                </div>
            </div>
        </li>
    @endforeach
    </ul>

</x-site-layout>
