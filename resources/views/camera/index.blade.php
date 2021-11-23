@extends('layout')

@section('content')
    <div class="p-3">
        <div class="w-100">
            <h2 class="text-center pb-5 text-gray-50 font-bold text-3xl">Cameras</h2>
            <div class="flex flex-wrap justify-center items-center">
                @forelse($cameras as $camera)
                    <div class="w-80 p-8 m-3 bg-gray-100 shadow rounded-lg">
                        <a href="{{ route('camera.show', ['id' => $camera->id]) }}" class="text-lg font-bold">
                            <p>{{ $camera->name }}</p>
                            <img src="{{ $camera->url }}/shot.jpg" alt="">
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
@endsection