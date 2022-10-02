@php
use App\Http\Controllers\Series;
@endphp

@extends('layouts.app')

@section('title', 'Pops Create')

@section('content')
    <form class="grid place-items-center w-1/2 m-auto my-5 p-5 bg-gray-100 rounded" action="/pops" method="POST">
        @csrf
        <div class="w-2/3 m-auto h-10 my-2">
            <label class="float-left" for="pop_number">Number:</label>
            <input class="w-5/6 float-right" type="text" id="pop_number" name="pop_number" placeholder="838">
        </div>
        <div class="w-2/3 m-auto h-10 my-2">
            <label class="float-left" for="pop_name">Name:</label>
            <input class="w-5/6 float-right" type="text" id="pop_name" name="pop_name" placeholder="Winter Soldier">
        </div>
        <div class="w-2/3 m-auto h-10 my-2">
            <label class="float-left" for="variant">Variant:</label>
            <input class="w-5/6 float-right" type="text" id="variant" name="variant" placeholder="with Shield">
        </div>
        <div class="w-2/3 m-auto h-10 my-2">
            <label class="float-left" for="category">Category:</label>
            <input class="w-5/6 float-right" type="text" id="category" name="category" placeholder="Marvel" value="Marvel">
        </div>
        <div class="w-2/3 m-auto h-10 my-2">
            <label for="series">Series:</label>
            <select class="w-5/6 float-right" name="series" id="series">
                <option value="" selected disabled hidden></option>
                @foreach ($series as $serie)
                    <option value="{{ $serie->name }}">{{ $serie->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-2/3 m-auto h-10 my-2">
            <label class="float-left" for="exclusive">Exclusive:</label>
            <input class="w-5/6 float-right" type="text" id="exclusive" name="exclusive" placeholder="Amazon Year Of The Shield">
        </div>
        <div class="w-2/3 m-auto h-10 my-2">
            <label class="float-left" for="limited">Limited:</label>
            <input class="w-5/6 float-right" type="text" id="limited" name="limited" placeholder="1000 pcs">
        </div>
        <br>
        <button class="w-1/3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Maak nieuwe pop</button>
    </form>
    <div id="info"></div>
@endsection
