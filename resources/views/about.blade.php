@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h2> {{ $name }}</h2>
    <h3>{{ $email }}</h3>
    <img src="img/{{ $image }}" alt="week" width="300">
@endsection