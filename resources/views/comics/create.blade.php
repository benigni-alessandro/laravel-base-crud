@extends('layouts.app')
@section('main')
<main>
  <div class="container creazione">
    <div class="row">
      <div class="col-12">
        <div class="insert">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <form action="{{route('comics.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label class="form-label">Title</label>
              <input type="text" name="title" value="" placeholder="Title">
            </div>
            <div class="mb-3">
              <label class="form-label">Image</label>
              <input type="text" name="thumb" value="" placeholder="Src Thumb">
            </div>
            <div class="mb-3">
              <label class="form-label">Description</label>
              <input type="text" name="description" value="" placeholder="Description">
            </div>
            <div class="mb-3">
              <label class="form-label">Serie</label>
              <input type="text" name="series" value="" placeholder="Serie">
            </div>
            <div class="mb-3">
              <label class="form-label">Sale date</label>
              <input type="text" name="sale_date" value="" placeholder="Sale date">
            </div>
            <div class="mb-3">
              <label class="form-label">Type</label>
              <input type="text" name="type" value="" placeholder="Type">
            </div>
            <div class="mb-3">
              <label class="form-label">Price</label>
              <input type="number" name="price" value="" placeholder="Price">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <a href="{{route('home')}}">Home</a>
      </div>
    </div>
  </div>
</main>
@endsection
