@extends('layout')

@section('content')
    <h1> Edit Details   </h1>


    <form method="POST" action="/events/{{ $event->id}} ">
        {{method_field('PATCH')}}
        {{ csrf_field()}}
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value = "{{ $event->title }}">

            </div>
        </div>

        <div class="field">
            <label class="label" for=""></label>

            <div class="control">
                <textarea name="description" class ="textarea" >{{ $event -> description }}</textarea>
            </div>
        </div>  

        <div class="field">
            <div class="control">   
                <button type = "submit" class="button is-link">Update Event</button>
            </div>
        </div>



    </form>

    <form method="POST" action="/events/{{ $event->id}} ">
        {{method_field('DELETE')}}
        {{ csrf_field()}}
        <div class="field">
            <div class="control">   
                <button type = "submit" class="button">Delete Event</button>
            </div>
        </div>

    </form>
@endsection