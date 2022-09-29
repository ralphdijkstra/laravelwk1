@extends('layouts.app')

@section('title', 'Pops')

@section('content')
<h1>Pops</h1>
<ul id="{{ $pop->pop_id }}">
    <li>Number: {{ $pop->pop_number }}</li>
    <li>Name: {{ $pop->pop_name }}</li>
    <li>Variant: {{ $pop->variant }}</li>
    <li>Exclusive: {{ $pop->exclusive }}</li>
    <li>Limited: {{ $pop->limited }}</li>
    <li>Series: {{ $pop->series }}</li>
    <li>Sort: {{ $pop->sort }}</li>
    <li>Year: {{ $pop->year }}</li>
    <li>Phase: {{ $pop->phase }}</li>
    <a href="{{ $pop->pop_id }}/edit">
        <img width="512px" src="{{ asset('pop/' . $pop->image) }}" />
    </a>
    <form action="/pops/{{ $pop->pop_id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Verwijder</button>
    </form>
</ul><br>
@endsection