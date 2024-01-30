@extends('layouts.main')

@section('container')
    
<article>
    
    <h2>{{$post->title}}</h2>

    <p>By, <a class="text-decoration-none" href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></p>
    {{-- <h5>By: {{$post->author}}</h5> --}}
    <p>{!!$post->body!!}</p>
</article>


    <a href="/blog">Kembali</a>
@endsection