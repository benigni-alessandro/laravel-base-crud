@extends('layouts.app')
@section('main')
<main>
  <div class="container creazione">
    <div class="row">
      <div class="col-12">
        <div class="insert">
          <input type="text" name="title" value="" placeholder="Title">
          <input type="text" name="src" value="" placeholder="Src Thumb">
          <input type="text" name="description" value="" placeholder="Description">
          <input type="text" name="serie" value="" placeholder="Serie">
          <input type="text" name="sale_date" value="" placeholder="Sale date">
          <input type="text" name="type" value="" placeholder="Type">
          <input type="number" name="price" value="" placeholder="Price">
          <button type="button" name="button">Create</button>
        </div>
        <a href="{{route('home')}}">Home</a>
      </div>
    </div>
  </div>
</main>
@endsection
