<x-site-layout title="">

    <div class="flex gap-6 ">
        <div class="w-2/3">
            <ul class="grid grid-cols-2 gap-10">
                @foreach($recent_news as $post)
                    <li class="overflow-hidden bg-gray-200 bg-opacity-25 backdrop-blur-lg shadow-md hover:shadow-lg rounded-lg group overflow-hidden duration-500 hover:scale-110">
                        <a href="{{route('posts.show', ['post' => $post])}}" class="rounded bg-reg-500 w-full overflow-hidden">
                            <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full rounded-lg group-hover:scale-110 transition overflow-hidden duration-500">
                        </a>
{{--                        <div class="bg-gray-200 bg-opacity-25 p-2 rounded-md backdrop-blur-lg">--}}
{{--                            <div class="col-span-2 p-2">--}}
{{--                                <div class="flex gap-x-2 mb-2">--}}
{{--                                    @foreach($post->categories as $category)--}}
{{--                                        <a href="{{route('categories.show', ['id' => $category->id])}}" class="uppercase bg-purple-500 hover:bg-teal-600 text-white rounded-full py-1 px-4 text-xs">--}}
{{--                                            {{$category->name}}--}}
{{--                                        </a>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}

{{--                                <a href="{{route('posts.show', ['post' => $post])}}" class="">--}}
{{--                                    <h2 class="font-bold text-lg line-clamp-1" >{{$post->title}}</h2>--}}
{{--                                    <span class="">{{$post->author?->name ?? 'UNKNOWN AUTHOR' }}</span>--}}
{{--                                    <span class="text-teal-500 mx-1">|</span>--}}
{{--                                    <span>{{$post->published_at->format('Y-m-d H:i')}}</span>--}}
{{--                                    <div class="px-1 pt-2 line-clamp-3">--}}
{{--                                        {{ Str::limit( strip_tags($post->body), 40) }}--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="w-1/3 p-4">
            <div class="flex text-xl rounded-lg border border-gray-300 p-9">
                <h1 class="font-serif">“{{$joke->joke}}”</h1>
            </div>
            <br>
            <h1 class="font-bold text-7xl">
                Step into a realm of creativity and imagination at our online art gallery. Explore a curated collection of mesmerizing artworks that transcend boundaries
            </h1>
            {{--<div class="grid gap-4">
                @foreach($authors as $author)
                    <div>
                        {{$author->name }}
                    </div>
                @endforeach

            </div>--}}

        </div>

    </div>




</x-site-layout>
