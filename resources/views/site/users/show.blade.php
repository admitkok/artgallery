<x-site-layout title="{{$user->name}}">
    <div class="pb-4 text-gray-500">
        {{$user->email}}
        </br>
        {{$user->created_at}}
    </div>

    <h2 class="font-semibold py-4 text-xl">Posts by this author</h2>
    <ul class="grid grid-cols-4 scrollable-container ml-4 gap-6">
        @foreach($user->posts as $post)
            <li class="grid grid-rows-1 overflow-hidden bg-gray-300 bg-opacity-25 backdrop-blur-lg shadow-md border border-white hover:shadow-lg rounded-lg group overflow-hidden duration-500 hover:scale-110">
                <a href="{{route('posts.show', ['post' => $post])}}" class="bg-reg-500 w-full overflow-hidden">
                    <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full group-hover:scale-110 transition overflow-hidden duration-500">
                </a>

                <div class="">
                    <div class="col-span-2 p-2">
                        <div class="flex gap-x-2 mb-2">
                            @foreach($post->categories as $category)
                                <a href="{{route('categories.show', ['id' => $category->id])}}" class="fill-button uppercase bg-black hover:bg-teal-600 text-white rounded-full py-1 px-4 text-xs">
                                    {{$category->name}}
                                </a>
                            @endforeach
                        </div>
                        <a href="{{route('posts.show', ['post' => $post])}}" class="">
                            <h2 class="font-bold text-lg line-clamp-1" >{{$post->title}}</h2>
                            <span class="">{{$post->author?->name ?? 'UNKNOWN AUTHOR' }}</span>
                            <span class="text-orange-500 mx-2">|</span>
                            <span>{{$post->published_at?->format('Y-m-d H:i')}}</span>
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
