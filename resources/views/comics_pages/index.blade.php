
@extends('layout.main')
@section('content')

<h1>FUMETTI - COMICS</h1>

<div class="container">
  <div class="row row-cols-3 ">

    @foreach ($comics as $comic)

    <div class="col">

      <div class="card" style="width: 18rem;">

        <img class="card-img-top" src={{$comic->thumb}} alt="em;">
        <div class="card-body">

        <h5 class="card-title">NOME:{{$comic->title}}</h5>
        <p class="card-text">GENERE:{{$comic->type}}</p>
        <p class="card-text">PREZZO:{{$comic->price}}</p>
        <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">DETTAGLI -></a>

      </div>

    </div>

    @endforeach
    
  </div>
</div>

@endsection
