<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Blog') }}
        </h2>
        <a class="btn btn-success" href="{{route('create')}}">Create Blog</a>
    </x-slot>

    <div class="py-12">
        <h1 class="text-center">Welcome Admin</h1>
        <div class="text-center"><a href="{{route('show')}}" class="btn btn-primary mx-auto">Manage Blog</a></div>

    </div>
</x-app-layout>
