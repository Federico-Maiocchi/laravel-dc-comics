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

                                <form action="{{ route('comics.destroy', $comic->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit">Cancella</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection