<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __("Voici votre tableau de bord pour gérer vos posts et votre profil !") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            @if(session('success'))
            <h1 class="my-2">{{session('success')}}</h1>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="my-2">Ma biographie</h1>

                <a href="/bio/{{$bio}}" class="bg-yellow-500 px-2 py-3 block">Editer ma biographie</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="my-2">Les bloggeur.euse.s que je suis</h1>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="my-2">Les posts que je like</h1>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="my-2">Mes posts</h1>
                @foreach($posts as $post)
                <div class="flex item-center">
                    <a href="{{route('posts.edit', $post)}}" class="bg-yellow-500 px-2 py-3 block">Editer {{$post->title}}</a>
                    <a href="#" class="bg-red-500 px-2 py-3 block" onclick="event.preventDefault;
                    document.getElementById('destroy-post-form').submit();
                    ">Supprimer {{$post->title}}
                        <form action="{{route('posts.destroy',$post)}}" method="post" id="destroy-post-form">
                            @csrf
                            @method('delete')
                        </form>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>