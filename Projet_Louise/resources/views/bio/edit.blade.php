<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editer ma biographie
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class="blcok text-red-500">{{$error}}</span>@endforeach
        </div>


        <form action="{{route('bio.update')}}" method="post" enctype="multipart/form-data" class="mt-10">
            @method('put')
            @csrf
            <x-input-label for="content" value="Contenu de la biographie" class="mt-5" />
            <textarea id="content" name="content">{{$bio->content}}</textarea>
            <x-primary-button style=" display: block !important;" class="mt-5">Modifier ma biographie</x-primary-button>
        </form>
    </div>
</x-app-layout>