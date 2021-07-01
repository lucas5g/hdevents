@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')


    <h1>Algum título</h1>
    @foreach ($names as $name)
        {{$name}} <br>
    @endforeach
    <img src="/img/banner.jpg" alt="Banner">

@endsection
