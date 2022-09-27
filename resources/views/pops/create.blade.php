@extends('layouts.app')

@section('title', 'Pops Create')

@section('content')
    <form action="/pops" method="POST">
        @csrf
        @if ($errors->any())
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
        </div>
        <div>
            <label for="pop_number">Number:</label>
            <input type="text" id="pop_number" name="pop_number" placeholder="Example: 838">
        </div>
        <div>
            <label for="pop_name">Name:</label>
            <input type="text" id="pop_name" name="pop_name" placeholder="Example: Winter Soldier">
        </div>
        <br>
        <button type="submit">Maak nieuwe pop</button>
    </form>
@endsection
