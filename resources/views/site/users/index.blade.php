<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Authors overview</div>
    <p class="mb-6">We currently have {{$users->count()}} active authors</p>
    <ul class="grid grid-cols-4 gap-4">
        @foreach($users as $user)
            <li class="block p-2 shadow-lg bg-black bg-opacity-100 fill-button1 rounded-lg">
                <a class="flex justify-between" href="{{route('users.show', ['user' => $user])}}">
                    <h2 class="font-bold text-lg" >{{$user->name}}</h2>
                    <span>{{$user->posts_count}}</span>
                </a>
            </li>
        @endforeach
    </ul>
</x-site-layout>
