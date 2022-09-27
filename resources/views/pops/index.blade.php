@extends('layouts.app')

@section('title', 'Pops')

@section('content')
<h1>Pops</h1>
@foreach ($pops as $pop)
<ul>
    <li>Number: {{ $pop->pop_number }}</li>
    <li>Name: {{ $pop->pop_name }}</li>
    <li>Variant: {{ $pop->variant }}</li>
    <li>Exclusive: {{ $pop->exclusive }}</li>
    <li>Limited: {{ $pop->limited }}</li>
    <li>Series: {{ $pop->series }}</li>
    <li>Sort: {{ $pop->sort }}</li>
    <li>Year: {{ $pop->year }}</li>
    <li>Phase: {{ $pop->phase }}</li>
    <img width="512px" src="{{ asset('pop/' . $pop->image) }}" />
</ul><br>
@endforeach
@endsection