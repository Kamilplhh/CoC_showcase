@extends('layouts.master')
@section('title', '- Home')
@vite('resources/js/home.js')


@section('content')
<div class="carousel">
    @foreach ($characters as $character)
    <div class="portrait" style="background-color: {{ $character->bg }}" id="{{ $character->id }}">
        <img src="{{ url('image/'.$character->src) }}" class="character" />
    </div>
    @endforeach
</div>
<div class="buttons">
    <div class="button" id="prev">
        <i class="fa-solid fa-angles-left fa-xl fa-beat"></i>
    </div>
    <div class="button" id="next">
        <i class="fa-solid fa-angles-right fa-xl fa-beat"></i>
    </div>
</div>
@stop