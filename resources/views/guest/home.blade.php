@extends('layouts.app')

@section('content')
    <h1>home</h1>
    <p>questa è la home</p>
    <button><a href="{{route('comics.index')}}">Sezione comics</a></button>    
@endsection