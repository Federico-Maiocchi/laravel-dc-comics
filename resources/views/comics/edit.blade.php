@extends('layouts.app')

@section('content')
    <button><a href="{{route('home')}}">Torna alla home</a></button>
    <button><a href="{{route('comics.index')}}">Sezione comics</a></button> 
    <section>
        <div class="container">
            <form action="{{ route('comics.update', $comic->id) }}" method="POST">

                @csrf

                {{-- Aggiungere metodo PUT --}}
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title comic</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{ $comic->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" placeholder="description" rows="3">{{ $comic->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="inserisci img" value="{{$comic->thumb }}" >
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Prezzo" value="{{ $comic->price }}"  >
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie comic</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Serie" value="{{ $comic->series }}" >
                </div>
                <div class="mb-3">
                    <label for="sale date" class="form-label">Data comic</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Data" value="{{ $comic->data }}">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="tipo" value="{{ $comic->type }}">
                </div>
                <button type="submit" class="btn btn-primary">Modifica</button>
            </form>
        </div>
    </section>
@endsection