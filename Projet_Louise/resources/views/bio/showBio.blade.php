<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

        </h2>
    </x-slot>

    <div class="my-4 max-w-7xl mx-auto px-6 lg:px-8">
        <img src="{{ asset('/storage/'.$post->image)}}" alt="" />
        <p class="my-4">{{ $bio->content }}</p>
    </div>
</x-app-layout>