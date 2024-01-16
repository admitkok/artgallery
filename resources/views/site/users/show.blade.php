

<x-site-layout title="{{$user->name}}">

    {{$user->email}}
    {{$user->created_at}}

    <h2 class="font-bold">Posts by this author</h2>
    <ul class="flex flex-nowrap ml-4">
        @foreach($category->posts as $post)
            <li class="grid grid-rows-1 overflow-hidden bg-gray-200 bg-opacity-25 backdrop-blur-lg shadow-md border border-white hover:shadow-lg rounded-lg group overflow-hidden duration-500 hover:scale-110">
                <a href="{{route('posts.show', ['post' => $post])}}" class="rounded bg-reg-500 w-full overflow-hidden">
                    <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full rounded-lg group-hover:scale-110 transition overflow-hidden duration-500">
                </a>

                <div class="bg-gray-200 bg-opacity-25 p-2 rounded-md backdrop-blur-lg">
                    <div class="col-span-2 p-2">
                        <div class="flex gap-x-2 mb-2">
                            @foreach($post->categories as $category)
                                <a href="{{route('categories.show', ['id' => $category->id])}}" class="fill-button uppercase bg-purple-700 hover:bg-teal-600 text-white rounded-full py-1 px-4 text-xs">
                                    {{$category->name}}
                                </a>
                            @endforeach
                        </div>
                        <a href="{{route('posts.show', ['post' => $post])}}" class="">
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
