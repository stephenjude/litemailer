@extends('layout')

@section('title', 'Send Builk Email')


@section('content')
<div class="relative overflow-hidden px-6 pb-6">
    <img src="{{ asset('images/wave.svg') }}" class="absolute top-0 left-2/5">
    <div class="container mx-auto relative">
        <div class="flex flex-col md:flex-row items-center pt-32 pb-16 md:pb-0">
            <div class="md:w-1/2 lg:w-1/2 mb-4 sm:mb-16 md:mb-0 bg-white rounded">
                <h3 class="pt-4 text-2xl text-center">Send Bulk Email</h3>
                <form class="px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700">
                            Subject
                        </label>
                        <input
                            class="w-full px-3 py-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            type="text" placeholder="Enter email subject" />
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700">
                            Message
                        </label>
                        <textarea
                            class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                            rows="12" placeholder="Message goes here..."></textarea>
                    </div>
                    <div class="mb-6 text-center">
                        <button
                            class="w-full px-4 py-2 font-bold text-white bg-teal-400 rounded-full hover:bg-teal-500 focus:outline-none focus:shadow-outline"
                            type="button">
                            Send
                        </button>
                    </div>
                </form>
            </div>
            <div class="mt-16 sm:mt-0 flex-1 flex justify-end">
                <img src="{{ asset('images/hero.svg') }}">
            </div>
        </div>
    </div>
</div>
@endsection
