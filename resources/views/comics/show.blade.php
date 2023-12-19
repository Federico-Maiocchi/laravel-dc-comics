@extends('layouts.app')

@section('content')
    <button><a href="{{route('home')}}">Torna alla home</a></button>
    <button><a href="{{route('comics.index')}}">Sezione comics</a></button> 
    <section>
        <div class="container">
            <div class="d-flex">
                <div class="col-6">
                    <button><a href="{{route('comics.edit', $comic->id)}}">Modifica comic</a></button>
                    <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-primary">Elimina</button>
                    </form>
                    <h1>{{ $comic->title }}</h1>
                    <img src="{{$comic->thumb}}" class="card-img-top w-100" alt="...">
                </div>
                <div class="col-6 row align-items-center">
                    <p class="card-text">{{$comic->description}}</p>
                    <p class="card-text">{{$comic->price}}</p>
                    <p class="card-text">{{$comic->series}}</p>
                    <p class="card-text">{{$comic->sale_date}}</p>
                </div>
            </div>    
        </div>
    </section>
@endsection