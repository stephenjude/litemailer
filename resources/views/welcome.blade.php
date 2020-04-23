@extends('layout')

@section('title', 'Welcome')

@section('content')
<div class="relative overflow-hidden px-6 pb-6">
    <img src="{{ asset('images/wave.svg') }}" class="absolute top-0 left-2/5">
    <div class="container mx-auto relative">
        <div class="flex flex-col md:flex-row items-center pt-32 pb-16 md:pb-0">
            <div class="md:w-1/2 lg:w-1/3 mb-4 sm:mb-16 md:mb-0">
                <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-6 md:mb-10">
                    Bulk email software for email marketing
                </h1>
                <p class="text-xl ">
                    You can check how we built it by following this <a class="text-teal-500 text-"
                        href="http://stephenjude.me/series/laravel-lessons">blog series</a>.
                </p>
            </div>
            <div class="mt-16 sm:mt-0 flex-1 flex justify-end">
                <img src="{{ asset('images/hero.svg') }}">
            </div>
        </div>
    </div>
</div>
@endsection
