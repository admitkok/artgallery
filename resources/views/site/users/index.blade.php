<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Authors overview</div>
    <p class="mb-6">We currently have {{$users->count()}} active authors</p>
    <ul class="grid grid-cols-2 gap-8 rounded-xl">
        @foreach($users as $user)
            <li class="block p-6 bg-black backdrop-blur-md border border-white rounded-3xl shadow-lg hover:scale-110 duration-500">
                <a class="flex justify-between" href="{{route('users.show', ['user' => $user])}}">
                    <h2 class="font-normal text-3xl text-white px-4 py-4" >{{$user->name}}</h2>
                    <div class="grid px-7 text-xl text-white bg-orange-500 items-center justify-end border rounded-full">
                        <span>{{$user->posts_count}}</span>
                    </div>
                </a>
                <a class="flex justify-between py-4" href="{{route('users.show', ['user' => $user])}}">
                    @if($user->posts->isNotEmpty())
                        <img src="{{$user->posts->first()->media->first() ? $user->posts->first()->media->first()->getUrl('preview') : "/images/9.jpeg"}}" class="max-h-96 w-full p-4 rounded-3xl overflow-hidden">
                    @else
                        <img src="/images/9.jpg" class="max-h-96 w-full p-4 rounded-3xl overflow-hidden"">
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
