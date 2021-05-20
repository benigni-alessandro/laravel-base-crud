@extends('layouts.app')
@section('main')
  <main>
    <div class="container fumetti">
      <div class="row">
        <div class="col-12">
          @foreach($comics as $comic)
          <a href="{{route('comics.show', ['comic'=>$comic->id])}}">
            <div class="card" style="width: 18rem;">
              <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text"><strong>Description: </strong>{{$comic->description}}</p>
                <p><strong>Serie: </strong>{{$comic->series}}</p>
                <p><strong>Sale date: </strong>{{$comic->sale_date}}</p>
                <p><strong>Type: </strong>{{$comic->type}}</p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
    </div>
  <a href="{{route('home')}}">Home</a>
  <a href="{{route('comics.create')}}">Create a comic</a>
  </main>
@endsection
