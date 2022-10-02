@extends('layouts.app')

@section('title', 'Series')
<style>

    .flex-container div {
        width: 400px;
        height: 225px;
        position: relative;
    }

    img {
        width: 150px;
        position: absolute;
        bottom: 0;
        left: 12.5%;
        right: 12.5%;
        margin: auto;
        transition: all .2s ease-in-out;
    }

    .flex-container div:hover>img {
        width: 200px;
    }

    .flex-container div:hover>.gradient {
        background: rgba(0, 0, 0, 0.5);
    }

    .gradient {
        background: rgba(0, 0, 0, 0);
        transition: all .2s ease-in-out;
        /* background: linear-gradient(0deg, rgba(0, 0, 0, 1) 0%, rgba(130, 130, 130, 0) 50%, rgba(255, 255, 255, 0) 100%); */
    }

    .flex-container {
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>
@section('content')
    <div class="flex-container">
        @foreach ($series as $serie)
            <a href="series/{{ $serie->id }}">
                <div
                    style='margin:0px;background: url({{ asset('img/' . $serie->image . '.jpg') }});background-repeat: no-repeat;background-size: 100% 100%;'>
                    <div class='gradient'>
                        <img src="{{ asset('img/' . $serie->image . '.png') }}" alt='' />
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection
