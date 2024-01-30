@extends('layouts.main') 
@section('container')
    <h2 class="p-0 m-0 text-center">About Me</h2>
    <hr>
    <h3 class="p-0 m-0">{{$name}}</h3>
    <p class="p-0 m-0">{{$email}}</p>
    <p class="p-0 mb-4"><i>sedang belajar laravek di bagian ke <b>10 factory</b> di yt WPU</i></p>
    <img ondblclick="window.location.href = '/akbar.jpg'" src="akbar.jpg" alt=""  width="240" class=" img-thumbnail  " style="margin-left: auto;">
@endsection
