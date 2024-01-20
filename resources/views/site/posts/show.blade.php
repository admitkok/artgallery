<x-site-layout title="{{$post->title}}">

    @if(session()->has('referrer'))
    <div class="bg-pink-500 text-pink-50 p-4 rounded my-4">
        This article is recommended to you by {{session()->get('referrer')}}
    </div>
    @endif

    <div class="flex gap-6">
        <div class="w-2/3">
            <img src="{{$post->getImageUrl('preview')}}" alt="{{$post->title}}" class="mb-4 w-[50rem] rounded-lg shadow-lg hover:scale-105 duration-500">
        </div>
        <div class="w-1/3 justify-items-center space-y-6 pl-9">
            @foreach($post->categories as $category)
                <a href="{{route('categories.show', ['id' => $category->id])}}" class="fill-button bg-black mb-4 text-white rounded-full py-1 px-4 text-lg duration-500 hover:shadow-md">
                    {{$category->name}}
                </a>
            @endforeach
            <div class="mb-2">
                <div class="flex justify-end gap-2 font-semibold">
                By <a class="border-b-2 border-orange-500 space-y-4 hover:scale-105 duration-500" href="{{route('users.show', ['user' => $post->author])}}">{{$post->author->name}}</a>
                </div>
                <div class="flex justify-end text-gray-500 text-sm">
                    {{$post->published_at}}
                </div>
            </div>
            <div class="space-y-4 rounded-md p-2 shadow-md hover:scale-110 duration-500">
                <a class="font-semibold">Description:</a>
                {!! $post->body !!}
            </div>
        </div>
    </div>
</x-site-layout>
