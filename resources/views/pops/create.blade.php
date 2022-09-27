@php
use App\Http\Controllers\Series;
if (isset($_COOKIE['selectedSeries'])) {
    $selectedSerie = $_COOKIE['selectedSeries'];
}
@endphp
@foreach ($series as $serie)
    @if($serie->name == $selectedSerie)
    @php
    $selectedSerieYear = $serie->year;
    $selectedSerieSort = $serie->id;
    $selectedSeriePhase = $serie->phase;
    @endphp
    @endif
@endforeach

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
            <select name="series" id="series" onchange="selectSeries()">
                <option value="" selected disabled hidden></option>
                @foreach ($series as $serie)
                    @if($serie->name == $selectedSerie){
                        <option value="{{ $selectedSerie }}" selected>{{ $selectedSerie }}</option>
                    }
                    @else
                    <option value="{{ $serie->name }}">{{ $serie->name }}</option>
                    @endif
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
        <div>
            <label for="year">Year:</label>
            <input type="text" id="year" name="year" readonly value="{{ $selectedSerieYear }}">
        </div>
        <div>
            <label for="sort">Sort:</label>
            <input type="text" id="sort" name="sort" readonly value="{{ $selectedSerieSort }}">
        </div>
        <div>
            <label for="phase">Phase:</label>
            <input type="text" id="phase" name="phase" readonly value="{{ $selectedSeriePhase }}">
        </div>
        <br>
        <button type="submit">Maak nieuwe pop</button>
    </form>
    <div id="info"></div>
    <script>
        function selectSeries() {
            let series = document.getElementById('series').value;
            var cookie = "selectedSeries=" + series;
            document.cookie = cookie;
            location.reload();
        }
    </script>
@endsection
