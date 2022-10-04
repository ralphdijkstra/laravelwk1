@php
use App\Http\Controllers\Series;
@endphp

@extends('layouts.app')

@section('title', 'Pops Edit')

@section('content')   
    <form class="grid place-items-center w-11/12 lg:w-3/4 xl:w-1/2 m-auto my-5 p-5 bg-gray-100 rounded" action="/pops/{{ $id }}" method="POST">
            @csrf
            @method('PUT')
        <div class="w-full my-2">
            <label class="float-left" for="pop_number">Number:</label>
            <input class="w-5/6 float-right" type="text" id="pop_number" name="pop_number" value="{{ $pop->pop_number }}">
        </div>
        <div class="w-full my-2">
            <label class="float-left" for="pop_name">Name:</label>
            <input class="w-5/6 float-right" type="text" id="pop_name" name="pop_name" value="{{ $pop->pop_name }}">
        </div>
        <div class="w-full my-2">
            <label class="float-left" for="variant">Variant:</label>
            <input class="w-5/6 float-right" type="text" id="variant" name="variant" value="{{ $pop->variant }}">
        </div>
        <div class="w-full my-2">
            <label class="float-left" for="category">Category:</label>
            <input class="w-5/6 float-right" type="text" id="category" name="category" value="{{ $pop->category }}">
        </div>
        <div class="w-full my-2">
            <label for="series">Series:</label>
            <select class="w-5/6 float-right" name="series" id="series">
                @foreach ($series as $serie)
                    <option value="{{ $serie->name }}" @if ($serie->name == $pop->series) selected @endif>{{ $serie->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="w-full my-2">
            <label class="float-left" for="exclusive">Exclusive:</label>
            <input class="w-5/6 float-right" type="text" id="exclusive" name="exclusive" value="{{ $pop->exclusive }}">
        </div>
        <div class="w-full my-2">
            <label class="float-left" for="limited">Limited:</label>
            <input class="w-5/6 float-right" type="text" id="limited" name="limited" value="{{ $pop->limited }}">
        </div>
        <br>
        <button class="w-1/2 md:w-1/3 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Edit pop</button>
    </form>
@endsection
