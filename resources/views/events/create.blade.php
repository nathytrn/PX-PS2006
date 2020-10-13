@extends('layout')

@section('content')
<div class="container">
<div class="content">
    <h1 class="title"> Create new events </h1>

    <form method="POST" action="/events">
        {{ csrf_field()}}
        <div class ="field">
            <label class="label" for="title">Event Title</label>

            <div class="control">
            <input type = "text" name ="title" class="input" required value = "{{ old ('title')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="date">Date</label>

            <div class="control">
                    <input type = "date" name ="date" class="input" required value = "{{ old ('date')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="time">Time</label>

            <div class="control">
                    <input type = "time" name ="time" class="input" required value = "{{ old ('time')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="location">Location</label>

            <div class="control">
            <input type = "text" name ="location"  class="input" required value = "{{ old ('location')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="title">Number</label>

            <div class="control">
            <input type = "text" name ="number" class="input" required value = "{{ old ('number')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="title">Email</label>

            <div class="control">
            <input type = "text" name ="email"  class="input" required value = "{{ old ('email')}}">
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

</div>
</div>

    
@endsection