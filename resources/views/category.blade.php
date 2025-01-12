@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Kategori Berita : {{ $category }}</h1>
    <article class="mb-5">
    @foreach ($posts as $post)
    <h2>
        <a href="/posts/{{$post->slug}}" class="text-decoration-none" >{{ $post->title }}</a>
    </h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post->excerpt }}</p>
    @endforeach
    </article>

@endsection