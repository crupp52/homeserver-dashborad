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

@push('js')
    <script>
        const xhr = new XMLHttpRequest();
        xhr.responseType = 'blob'; /so you can access the response like a normal URL
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                const img = document.createElement('img');
                img.src = URL.createObjectURL(xhr.response); /create <img> with src set to the blob
                document.body.appendChild(img);
            }
        };

        / automatically play the first video when page is loaded
        window.addEventListener('DOMContentLoaded', function() {
            xhr.open('GET', '{{ $camera->url }}/video', true);
            xhr.setRequestHeader('Authorization', 'Basic VTRtWa46ZdYyVVltZkhpa1pEemLs');
            xhr.send();
        }, false);
    </script>
@endpush