@extends('layouts.app')
@section('main')
<main>
  <div class="container creazione">
    <div class="row">
      <div class="col-12">
        <div class="insert">
          <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" name="title" value="{{$comic->title}}" placeholder="Title">
            </div>
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Src Thumb">
            </div>
            <div class="mb-3">
              <label class="form-label">Description</label>
              <input type="text" name="description" value="{{$comic->description}}" placeholder="Description">
            </div>
            <div class="mb-3">
              <label class="form-label">Serie</label>
              <input type="text" name="series" value="{{$comic->series}}" placeholder="Serie">
            </div>
            <div class="mb-3">
              <label class="form-label">Sale date</label>
              <input type="text" name="sale_date" value="{{$comic->sale_date}}" placeholder="Sale date">
            </div>
            <div class="mb-3">
              <label class="form-label">Type</label>
              <input type="text" name="type" value="{{$comic->type}}" placeholder="Type">
            </div>
            <div class="mb-3">
              <label class="form-label">Price</label>
              <input type="number" name="price" value="{{$comic->price}}" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-primary">edit</button>
          </form>
        </div>
        <a href="{{route('home')}}">Home</a>
      </div>
    </div>
  </div>
</main>
@endsection
