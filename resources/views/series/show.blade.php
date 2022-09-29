@extends('layouts.app')

@section('title', 'Series')

@section('content')
    {{-- <img width="512px" src="{{ asset('img/' . $serie->image . '.jpg') }}" /> --}}
    <img width="512px" src="{{ asset('img/' . $serie->image . '.png') }}" /> <br>
    <div style="display: flex; flex-wrap: wrap;text-align: center;">
        @foreach ($pops as $pop)
            <div>
                <img width="512px" src="{{ asset('pop/' . $pop->image) }}" /> <br>
                <p style="font-family: Arial, Helvetica, sans-serif; font-size: 18px; font-weight: bold;">
                    {{ $pop->pop_number }} {{ $pop->pop_name }} {{ $pop->variant }}
                </p>
            </div>
        @endforeach
    </div>
@endsection
