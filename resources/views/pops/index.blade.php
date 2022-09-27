@extends('layouts.app')

@section('title', 'Home')

@section('content')
<h1>Pops</h1>
@foreach ($pops as $pop)
<div>
    {{ $pop->number }}
    {{ $pop->name }}
    {{ $pop->variant }}
</div>
@endforeach
@endsection