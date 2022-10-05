@extends('layouts.app')

@section('title', 'Pops')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
        @foreach ($pops as $pop)
            <div class="p-4 grid place-items-end justify-items-center gap-2">
                <div class="items-end"><img width="512px" src="{{ asset('pop/' . $pop->image) }}" /></div>
                <div>
                    <p>{{ $pop->pop_number }} {{ $pop->pop_name }} {{ $pop->variant }}</p>
                </div>
                <div class="flex">
                    <a class="mx-2" href="pops/{{ $pop->pop_id }}">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Details</button>
                    </a>
                    <a class="mx-2" href="pops/{{ $pop->pop_id }}/edit">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                    </a>
                    <form class="mx-2" action="/pops/{{ $pop->pop_id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                    </form>
                </div>

            </div>
        @endforeach
    </div>
@endsection
