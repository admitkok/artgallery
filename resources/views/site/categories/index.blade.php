<x-site-layout title="">
    <div class="text-9xl pb-24 items-center italic">Categories</div>
    <ul class="grid grid-cols-2 gap-8 rounded-xl">
        @foreach($categories as $category)
            <li class="block p-6 text-center bg-black backdrop-blur-md border border-white rounded-3xl shadow-lg hover:scale-110 duration-500">
                    <h2 class="font-normal text-3xl text-white px-4 pt-4" >{{$category->name}}</h2>
                <a class="rounded bg-reg-500 w-full overflow-hidden" href="{{route('categories.show', ['id' => $category->id])}}">
                    @if($category->posts->isNotEmpty())
                        <img src="{{$category->posts->first()->media->first() ? $category->posts->first()->media->first()->getUrl('preview') : "/images/9.jpg"}}" class="max-h-96 w-full p-4 rounded-3xl overflow-hidden">
                    @else
                        <img src="/images/7.jpg" class="max-h-96 w-full p-4 rounded-3xl overflow-hidden">
                    @endif
                </a>
            </li>
        @endforeach
    </ul>

</x-site-layout>
