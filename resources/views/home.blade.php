@extends('layouts.master')
@section('title', '- Home')
@vite('resources/js/home.js')


@section('content')
<div class="carousel">
    <div class="portrait" style="background-color: rgb(128, 65, 191)">
        <img src="image/pekka.png" class="character" />
    </div>
    <div class="portrait back" style="background-color: rgb(228, 230, 115)">
        <img src="image/barbarian.png" class="character" />
    </div>
</div>
@stop