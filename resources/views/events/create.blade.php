@extends('layout')

@section('content')

    <h1 class="title"> Create new events </h1>

    <form method="POST" action="/events">
        {{ csrf_field()}}
        <div class ="field">
            <label class="label" for="title">Event Title</label>

            <div class="control">
            <input type = "text" name ="title" placeholder="Event title" class="input" required value = "{{ old ('title')}}">
            </div>
        </div>

        <div class="field"> 
            <label class="label" for="description">Event Description</label>
        <div class="control">
                <textarea name = "description" placeholder="Event Description" class="textarea" required > {{ old ('description')}} </textarea>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-link"> Create Event </button>
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


    
@endsection