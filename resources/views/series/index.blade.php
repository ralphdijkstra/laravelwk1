@extends('layouts.app')

@section('title', 'Series')

@section('content')
    <h1>Series</h1>
    @foreach ($series as $serie)
        <a href="/series/{{ $serie->id }}">{{ $serie->name }}</a><br>
        
    @endforeach
    
@endsection
