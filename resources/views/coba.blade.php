
@extends('main')


@section('container')

<p>ini hanya untuk mencoba data</p>

@foreach ($post as $item)
    <h2><a href="/{{ $item["Year_terbit"] }}">{{ $item["judul"] }}</a></h2>

@endforeach

@endsection