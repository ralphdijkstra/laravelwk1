@extends('layouts.app')

@section('title', 'Pops')

@section('content')
<h1>Pops</h1>
@foreach ($pops as $pop)
<div>
    {{ $pop->pop_number }}
    {{ $pop->pop_name }}
    {{ $pop->variant }}
</div>
@endforeach
@endsection