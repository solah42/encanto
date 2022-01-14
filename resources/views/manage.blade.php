<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Blog') }}
        </h2>
        <a class="btn btn-success" href="{{route('create')}}">Create Blog</a>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">
                @foreach ($post as $data)
                <div class="card col-md-4 mr-2" style="width: 18rem;">
                    <img src="{{asset($data->image)}}" class="card-img-top w-100 w-50" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Title : {{$data->name}}</h5>
                      <p class="card-text">Content : {{$data->content}}</p>
                      <p class="card-text">Price : {{$data->price}}</p>
                      <a href="{{route('delete', $data->id)}}" class="btn btn-danger w-100">delete</a>
                    </div>
                  </div>
                  @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
