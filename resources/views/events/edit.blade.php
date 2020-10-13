@extends('layout')

@section('content')
<div class="container">
    <div class="content">
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


        <div class ="field">
            <label class="label" for="date">Date</label>

            <div class="control">
                    <input type = "date" name ="date" placeholder="date" class="input" required value = "{{ $event->date }}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="time">Time</label>

            <div class="control">
                    <input type = "time" name ="time" placeholder="time" class="input" required value = "{{ $event->time }}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="title">Location</label>

            <div class="control">
            <input type = "text" name ="location" placeholder="Event Location" class="input" required value = "{{ $event->location }}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="title">Number</label>

            <div class="control">
            <input type = "text" name ="number" placeholder="Number" class="input" required value = "{{ $event->number }}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="title">Email</label>

            <div class="control">
            <input type = "text" name ="title" placeholder="Email" class="input" required value = "{{ $event->email}}">
            </div>
        </div>


        <div class="field">
            <label class="label" for="description">Description</label>

            <div class="control">
                <textarea name="description" class ="textarea" >{{ $event -> description }}</textarea>
            </div>
        </div>  

        <div class="field">
            <div class="control">   
                <button type = "submit" class="button is-link">Update Event</button>
            </div>
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

    <form method="POST" action="/events/{{ $event->id}} ">
        {{method_field('DELETE')}}
        {{ csrf_field()}}
        <div class="field">
            <div class="control">   
                <button type = "submit" class="button">Delete Event</button>
            </div>
        </div>

    </form>

</div>

</div>
@endsection