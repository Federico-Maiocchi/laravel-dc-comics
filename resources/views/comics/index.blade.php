@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-3">
                        <div class="card h-100" style="width: 18rem;">
                            <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$comic->title}}</h5>
                                <p class="card-text">{{$comic->descrption}}</p>
                                <p class="card-text">{{$comic->price}}</p>
                                <p class="card-text">{{$comic->series}}</p>
                                <p class="card-text">{{$comic->sale_date}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection