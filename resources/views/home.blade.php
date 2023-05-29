@extends('layouts.master')
@section('title', '- Home')
@vite('resources/js/home.js')


@section('content')
<div class="carousel">
    <div class="portrait behind one" style="background-color: rgb(128, 65, 191)" id="1">
        <img src="image/barbarian.png" class="character" />
    </div>

    <div class="portrait main" style="background-color: rgb(128, 65, 191)" id="2">
        <img src="image/pekka.png" class="character" />
    </div>
    
    <div class="portrait back" style="background-color: rgb(228, 230, 115)" id="3">
        <img src="image/barbarian.png" class="character" />
    </div>

    <div class="portrait behind two" style="background-color: rgb(228, 230, 115)" id="4">
        <img src="image/pekka.png" class="character" />
    </div>
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