<!-- Here we have all the posts displayed -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ici, vous trouverez votre biographie') }}
        </h2>
    </x-slot>

    <!-- This is an example component -->
    <section class="flex flex-row flex-wrap mx-auto">
        <p>{{$bio}}</p>
    </section>
</x-app-layout>