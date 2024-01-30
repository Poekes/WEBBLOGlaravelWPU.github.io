@extends('layouts.main')
@section('container')

<h2 class="text-center m-0 mb-4 ">Halaman Blog Post</h2>

    @foreach ($posts as $p)
    <h3>
        <a class="text-decoration-none" href="/posts/{{$p->slug}}">
            {{$p->title}}
        </a>
    </h3>
    <div class="m-3 mt-0 mb-0">
        <p class="m-0">
            By, 
            <a class="text-decoration-none" href="/authors/{{$p->author->username}}"> {{$p->author->name}}  </a> in 
            <a class="text-decoration-none"  href="/categories/{{$p->category->slug}}">{{$p->category->name}}</a>
        </p>
        <p class="p-0 m-0">{{ $p->excerpt }}</p>
        <a href="/posts/{{$p->slug}}">Read More</a>
        <p class=" m-0" style="font-size: 11px">
            {{ explode(' ',$p->created_at)[0] }}
        </p>
    </div>
    <hr>
    @endforeach
@endsection



