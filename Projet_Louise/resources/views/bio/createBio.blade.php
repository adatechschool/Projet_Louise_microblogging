<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ici, vous pourrez créer votre biographie') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="my-5">
            @foreach ($errors->all() as $error)
            <span class="blcok text-red-500">{{$error}}</span>@endforeach
        </div>


        <form action="{{route('bio.store')}}" method="post" enctype="multipart/form-data" class="mt-10">
            @csrf
            <x-input-label for="content" value="Contenu de ma biographie" class="mt-5" />
            <textarea id="content" name="content"></textarea>
            <x-input-label for="image" value="Image" class="mt-5" />
            <x-text-input id="image" type="file" name="image" />
            <x-primary-button style="display: block !important;" class="mt-5">Créer ma biographie</x-primary-button>
        </form>
    </div>
</x-app-layout>