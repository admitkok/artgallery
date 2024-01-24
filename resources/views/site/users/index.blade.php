<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Authors overview</div>
    <p class="mb-6">We currently have {{$users->count()}} active authors</p>
    <ul class="grid grid-cols-2 gap-6 rounded-xl">
        @foreach($users as $user)
            <li class="block p-6 bg-black backdrop-blur-md border border-white rounded-3xl shadow-lg hover:scale-105 duration-500">
                <a class="flex justify-between" href="{{route('users.show', ['user' => $user])}}">
                    <h2 class="font-normal text-3xl text-white px-4 py-4" >{{$user->name}}</h2>
                    <div class="grid px-7 text-xl text-white bg-orange-500 items-center justify-end border rounded-full">
                        <span>{{$user->posts_count}}</span>
                    </div>
                </a>
                <a class="flex justify-between py-4" href="{{route('users.show', ['user' => $user])}}">
                    @foreach($user->posts as $post)
                        <img src="{{$post->media->first() ? $post->media->first()->getUrl('preview') : "2.jpeg"}}" class="w-full rounded-md group-hover:scale-110 transition overflow-hidden duration-500">
                    @endforeach
                </a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
