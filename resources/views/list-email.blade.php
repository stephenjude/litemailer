@extends('layout')

@section('title', 'Send Builk Email')

@section('content')
<div class="relative overflow-hidden px-6 pb-6">
    <img src="{{ asset('images/wave.svg') }}" class="absolute top-0 left-2/5">
    <div class="container mx-auto relative">
        <div class="flex flex-col md:flex-row items-center pt-32 pb-16 md:pb-0">
            <div class="w-full shadow-lg md:w-1/2 lg:w-1/2 mb-4 sm:mb-16 md:mb-0 bg-white rounded-lg">
                <h3 class="pt-4 text-2xl text-center">List Email</h3>

                <style>
                    table.ListTable {
                        width: 100%;
                        background-color: #ffffff;
                        border-collapse: collapse;
                        border-width: 2px;
                        border-color: #4fd1c5;
                        border-style: solid;
                        color: #000000;
                    }

                    table.ListTable td,
                    table.ListTable th {
                        border-width: 2px;
                        border-color: #4fd1c5;
                        border-style: solid;
                        padding: 3px;
                    }

                    table.ListTable thead {
                        background-color: #00ff33;
                    }
                </style>

                <table class="ListTable">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emails as $key => $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="mt-16 sm:mt-0 flex-1 flex justify-end">
                <img src="{{ asset('images/hero.svg') }}">
            </div>
        </div>
    </div>
</div>
@endsection