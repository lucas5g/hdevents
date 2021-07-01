@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
    @if ($id != null)
        <h1>Exibindo o produto id: {{ $id }}</h1>
    @endif

    <p>
        O usuário está buscando por: {{$busca}}
    </p>
@endsection
