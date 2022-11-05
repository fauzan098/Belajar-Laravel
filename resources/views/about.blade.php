@extends('layouts.main')
@section('container')
    <h1>halaman {{ $title }}</h1>
    {{-- menggunkan blade template engine --}}
    <h3>{{ $name }}</h3>
    <h3>{{ $email }}</h3>
    <img src="img/{{ $image }}" alt="{{ $name }}" class="img-thumbnail rounded-circle">
@endsection
