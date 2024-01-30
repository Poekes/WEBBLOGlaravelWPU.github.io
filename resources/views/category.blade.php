@extends('layouts.main')
@section('container')
    
<h2>Post Category : {{ $category }} </h2>
<i class=" text-end"><a href="/categories">All Category</a></i>
<hr>
    @foreach ($posts as $p)
        
    <h2>
        <a href="/posts/{{$p->slug}}">
            {{$p->title}}
        </a>
    </h2>
    <p>{{ $p->excerpt }}</p>
    @endforeach
@endsection



