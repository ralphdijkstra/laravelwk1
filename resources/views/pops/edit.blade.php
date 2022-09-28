@php
use App\Http\Controllers\Series;
@endphp

@extends('layouts.app')

@section('title', 'Pops Edit')

@section('content')
    <form action="/pops/{{ $id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="pop_number">Number:</label>
            <input type="text" id="pop_number" name="pop_number" value="{{ $pop->pop_number }}">
        </div>
        <div>
            <label for="pop_name">Name:</label>
            <input type="text" id="pop_name" name="pop_name" value="{{ $pop->pop_name }}">
        </div>
        <div>
            <label for="variant">Variant:</label>
            <input type="text" id="variant" name="variant" value="{{ $pop->variant }}">
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" value="{{ $pop->category }}">
        </div>
        <div>
            <label for="series">Series:</label>
            <select name="series" id="series">
                @foreach ($series as $serie)
                    <option value="{{ $serie->name }}" @if ($serie->name == $pop->series) selected @endif>{{ $serie->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="exclusive">Exclusive:</label>
            <input type="text" id="exclusive" name="exclusive" value="{{ $pop->exclusive }}">
        </div>
        <div>
            <label for="limited">Limited:</label>
            <input type="text" id="limited" name="limited" value="{{ $pop->limited }}">
        </div>
        <br>
        <button type="submit">Edit pop</button>
    </form>
    <div id="info"></div>
@endsection
