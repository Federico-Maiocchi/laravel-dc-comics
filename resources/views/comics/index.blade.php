@extends('layouts.app')

@section('content')
<button><a href="{{route('home')}}">Torna alla home</a></button>
<button><a href="{{route('comics.create')}}">Aggiungi comic</a></button> 
    <section>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-3 p-3">
                        <div class="card h-100" style="width: 12rem;">
                            <img src="{{$comic->thumb}}" class="card-img-top h-100 w-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="{{route('comics.show',$comic)}}">
                                        {{$comic->title}}
                                    </a>    
                                </h5>
                                {{-- <p class="card-text">{{$comic->description}}</p> --}}
                                <p class="card-text">{{$comic->price}}</p>
                                <p class="card-text">{{$comic->series}}</p>
                                <p class="card-text">{{$comic->sale_date}}</p>
                                <button><a href="{{route('comics.edit', $comic->id)}}">Modifica comic</a></button>

                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $comic->id }}">
                                    Elimina
                                </button>
                                <div class="modal fade" id="staticBackdrop{{ $comic->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Attenzione</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Sei sicuro di voler ELIMINARE questa scheda?
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                
                                                    <button type="submit" class="btn btn-primary">Procedi</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection