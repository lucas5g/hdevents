@extends('layouts.main')
@section('title', 'Editando: '. $event->title)


@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando: {{$event->title}}</h1>          
        <form action="/events/update/{{$event->id}}" method="post"  enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="/img/events/{{ $event->image}}" alt="{{ $event->title }}" class="img-preview">
             </div>
             {{-- <p>  {{$event}}</p> --}}
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" value={{ $event->title}}>
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value={{$event->city}}>
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'":""}} >Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="O que vai acontecer no evento?">
                    {{ $event->description}}
                </textarea>
            </div>
            <div class="form-group">
                <label for="items"></label>
                <div class="from-group">
                    <input type="checkbox" name="items[]" value="Cadeirar"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>

            <input type="submit" class="btn btn-primary" value="Salvar Evento">
        </form>
        
    </div>
@endsection
