<x-site-layout title="ADMIN ZONE - CATEGORIES - EDIT">


    <form action="{{route('home.posts.update', $post->id)}}" method="post">

        @csrf
        @method('PUT')

        <x-crud-input-field name="title" label="Post title" value="{{$post->title}}" placeholder="..."/>
        <x-crud-input-field name="body" label="Body" value="{{$post->body}}" placeholder="..."/>

        <button type="submit">Update</button>
    </form>

</x-site-layout>
