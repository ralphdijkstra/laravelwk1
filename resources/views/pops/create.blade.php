@extends('layouts.app')

@section('title', 'Pops Create')

@section('content')
    <form action="/pops" method="POST">
        @csrf
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
            <label for="pop_id">Id:</label>
            <input type="text" id="pop_id" name="pop_id" placeholder="">
            @error('pop_id')
                <div> {{ $message }} </div>
            @enderror
        </div> --}}
        <div>
            <label for="pop_number">Number:</label>
            <input type="text" id="pop_number" name="pop_number" placeholder="838">
        </div>
        <div>
            <label for="pop_name">Name:</label>
            <input type="text" id="pop_name" name="pop_name" placeholder="Winter Soldier">
        </div>
        <div>
            <label for="variant">Variant:</label>
            <input type="text" id="variant" name="variant" placeholder="with Shield">
        </div>
        <div>
            <label for="category">Category:</label>
            <input type="text" id="category" name="category" placeholder="Marvel">
        </div>
        <div>
            <label for="series">Series:</label>
            <select name="series" id="series">
                @foreach ($series as $serie)
                    <option value="{{ $serie->name }}">{{ $serie->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="exclusive">Exclusive:</label>
            <input type="text" id="exclusive" name="exclusive" placeholder="Amazon Year Of The Shield">
        </div>
        <div>
            <label for="limited">Limited:</label>
            <input type="text" id="limited" name="limited" placeholder="1000 pcs">
        </div>
        <br>
        <button type="submit">Maak nieuwe pop</button>
    </form>
@endsection
