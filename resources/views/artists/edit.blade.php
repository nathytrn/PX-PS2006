@extends('layout')

@section('content')

    <h1 class="title"> Edit artist details:</h1>

    <form method="POST" action="/artists/{{ $artist->id}}">
        {{ csrf_field()}}
        {{method_field('PATCH')}}
        <div class ="field">
            <label class="label" for="name">Artist Name</label>

            <div class="control">
                <input type = "text" name ="name" placeholder="Artist Name" class="input" required value = "{{ $artist->name }}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="email">Email</label>

            <div class="control">
            <input type = "text" name ="email" placeholder="Email" class="input" required value = "{{ $artist->email }}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="phoneNumber">Phone Number</label>

            <div class="control">
            <input type = "text" name ="phoneNumber" placeholder="Phone Number" class="input" required value = "{{ $artist->phoneNumber }}">
            </div>
        </div>

        <div class="field"> 
            <label class="label" for="personas">Personas</label>
        <div class="control">
                <textarea name = "personas" placeholder="Artist Personas" class="textarea" required >  {{ $artist->personas }} </textarea>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-link">Update Artist </button>
        </div>

        @if ($errors->any())
        <div class="notification is-danger">
            <ul>
                @foreach ($errors->all() as $error) 
                    <li>{{$error}}</li>
                    
                @endforeach
            </ul>
        </div>
        @endif



    </form>

    <form method="POST" action="/artists/{{ $artist->id}} ">
        {{method_field('DELETE')}}
        {{ csrf_field()}}
        <div class="field">
            <div class="control">   
                <button type = "submit" class="button">Delete Artist</button>
            </div>
        </div>

    </form>

    
@endsection