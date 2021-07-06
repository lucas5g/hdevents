@extends('layouts.main')
@section('title', 'Criar Evento')


@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>  Criar eventos</h1>          
        <form action="/events" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
        
    </div>
@endsection
