<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer {{$post->title}}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class="blcok text-red-500">{{$error}}</span>@endforeach
        </div>


        <form action="{{route('posts.update',$post)}}" method="post" enctype="multipart/form-data" class="mt-10">
            @method('put')
            @csrf
            <x-input-label for="title" value="Titre du post" />
            <x-text-input id="title" name="title" value="{{$post->title}}" />
            <x-input-label for="content" value="Contenu du post" class="mt-5" />
            <textarea id="content" name="content">{{$post->content}}</textarea>
            <x-input-label for="image" value="Image du post" class="mt-5" />
            <x-text-input id="image" type="file" name="image" />
            <x-input-label for="category" value="Catégorie du post" class="mt-5" />
            <select name="category" id="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{$post->category_id == $category->id ? 'selected':''}}>{{$category->name}}</option>
                @endforeach
            </select>
            <x-primary-button style=" display: block !important;" class="mt-5">Modifier mon post</x-primary-button>
        </form>
    </div>
</x-app-layout>