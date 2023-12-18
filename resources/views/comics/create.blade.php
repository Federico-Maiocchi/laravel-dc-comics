@extends('layouts.app')

@section('content')
    <button><a href="{{route('home')}}">Torna alla home</a></button>
    <button><a href="{{route('comics.index')}}">Sezione comics</a></button> 
    <section>
        <div class="container">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title comic</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="description" id="description" placeholder="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="thumb" class="form-label">Immagine</label>
                    <input type="text" class="form-control" name="thumb" id="thumb" placeholder="inserisci img">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" class="form-control" name="price" id="price" placeholder="Prezzo">
                </div>
                <div class="mb-3">
                    <label for="series" class="form-label">Serie comic</label>
                    <input type="text" class="form-control" name="series" id="series" placeholder="Serie">
                </div>
                <div class="mb-3">
                    <label for="sale date" class="form-label">Data comic</label>
                    <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Data">
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" name="type" id="type" placeholder="tipo">
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi</button>
            </form>
        </div>
    </section>
@endsection