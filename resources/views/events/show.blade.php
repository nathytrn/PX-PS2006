@extends('layout')

@section('content')
        <h1 class = "title">{{ $event-> title}}</h1>
        <div class="content">{{ $event-> description}}</div>
        <p>
            <a href="/events/{{ $event -> id}}/edit">Edit</a>
        </p>
        
@endsection