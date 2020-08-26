@extends('layout')

@section('content')
        <h1 class = "title">{{ $artist -> name}}</h1>
        <div class="content">{{ $artist-> personas}}</div>
        <p>
            <a href="/artists/{{ $artist -> id}}/edit">Edit</a>
        </p>
        
@endsection