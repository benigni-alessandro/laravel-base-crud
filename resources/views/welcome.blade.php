@extends('layouts.app')
@section('main')
  <main>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                COMICS
            </div>
            <div class="links">
                <a href="{{route('comics.index')}}">Comics</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
    </div>
  </main>
@endsection
