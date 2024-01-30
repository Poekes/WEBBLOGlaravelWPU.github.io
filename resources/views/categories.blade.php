@extends('layouts.main')
@section('container')

    <h2>Page Categories</h2>
<hr>
    @foreach ($category as $p)
    <ul>
        <li>
            <h2>
                <a href="/categories/{{$p->slug}}">
                    {{$p->name}}
                </a>
            </h2>
        </li>
    </ul>
    {{-- <p>{{ $p->excerpt }}</p> --}}
    @endforeach
@endsection



