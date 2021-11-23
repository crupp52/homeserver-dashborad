@extends('layout')

@section('content')
    <div class="p-3">
        <div class="w-100">
            <h2 class="text-center pb-5 text-gray-50 font-bold text-3xl">Services</h2>
            <div class="flex flex-wrap justify-center items-center">
                @forelse($serviceCards as $serviceCard)
                    <div class="w-80 p-8 m-3 bg-gray-100 shadow rounded-lg">
                        <a href="{{ $serviceCard->generateRoute() }}" target="_blank" class="text-lg font-bold">
                            <p>{{ $serviceCard->name }}</p>
                        </a>
                        <a href="{{ $serviceCard->generateRoute() }}" target="_blank" class="font-thin hover:underline">
                            <p>{{ $serviceCard->generateRoute() }}</p>
                        </a>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <div class="p-3 py-10">
        <div>
            <div class="text-center text-gray-50 pb-5">
                <h2 class="font-bold text-3xl">Vodafone-7adb40</h2>
                <p>Password: LDM5YWNF2YTZ</p>
            </div>
            <div class="flex justify-center">
                <img alt=""
                     src="data:image/png;base64,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"/>
            </div>
        </div>
    </div>
@endsection