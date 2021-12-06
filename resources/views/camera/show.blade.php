@extends('layout')

@section('content')
    <div class="w-100">
        <a class="text-gray-50" href="{{ route('camera.index') }}">Back</a>
        <h2 class="text-center pb-5 text-gray-50 font-bold text-3xl">{{ $camera->name }}</h2>
        <div class="w-full bg-gray-100 shadow rounded-lg">

            <iframe src="{{ $camera->url }}/video" style="overflow:hidden;height:100%;width:100%" height="100%" width="100%"></iframe>
        </div>
    </div>
@endsection