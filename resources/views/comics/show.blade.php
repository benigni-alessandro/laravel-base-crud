@extends('layouts.app')
@section('main')
<main>
  <div class="container single_fumetto">
    <div class="row">
      <div class="col-12">
        <div class="card" style="width: 18rem;">
          <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$comic->title}}</h5>
            <p class="card-text"><strong>Description: </strong>{{$comic->description}}</p>
            <p><strong>Serie: </strong>{{$comic->series}}</p>
            <p><strong>Sale date: </strong>{{$comic->sale_date}}</p>
            <p><strong>Type: </strong>{{$comic->type}}</p>
          </div>
          <a href="{{route('comics.index')}}">Torna indietro</a>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
