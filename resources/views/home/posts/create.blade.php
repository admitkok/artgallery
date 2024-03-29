<x-site-layout title="Create new post">

    <form action="{{route('home.posts.store')}}" method="post" enctype="multipart/form-data" class="space-y-4">

        @csrf

        <x-crud-input-field name="title" label="Title" placeholder="..."/>



        <br/>

        <fieldset>
            <legend>Choose categories:</legend>

            @foreach($categories as $id => $label)
                <div>
                    <label for="category-{{$id}}">
                        <input id="category-{{$id}}" type="checkbox" name="categories[]" value="{{$id}}" />
                        {{$label}}
                    </label>
                </div>
            @endforeach

        </fieldset>

        {{-- alternative use case: have free text input instead of structured:
        <x-crud-input-field name="categories" label="Categories" placeholder="add your categories, separate with a comma"/>
        --}}

        <br/>

        <x-crud-rich-text-editor name="body" label="Your post" placeholder="Just start typing" />

        <br/>
        <label for="file">File</label>
        <input name="image" type="file" />

        <div class="w-1/12 bg-indigo-600 text-white px-4 py-2 rounded-lg text-center">
            <button type="submit">Create</button>
        </div>
    </form>

</x-site-layout>
