@extends('layout')

@section('content')

    <h1 class="title"> Create new artist </h1>

    <form method="POST" action="/artists">
        {{ csrf_field()}}
        <div class ="field">
            <label class="label" for="name">Artist Name</label>

            <div class="control">
            <input type = "text" name ="name" placeholder="Artist Name" class="input" required value = "{{ old ('name')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="email">Email</label>

            <div class="control">
            <input type = "text" name ="email" placeholder="Email" class="input" required value = "{{ old ('email')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="phoneNumber">Phone Number</label>

            <div class="control">
            <input type = "text" name ="phoneNumber" placeholder="Phone Number" class="input" required value = "{{ old ('phoneNumber')}}">
            </div>
        </div>

        <div class ="field">
            <label class="label" for="phoneNumber">Location</label>

            <div class="control">
            <input type = "text" name ="location" placeholder="Location" class="input" required value = "{{ old ('location')}}">
            </div>
        </div>

        <label for="status" class="label">Status</label>

        <select name="status" id="status" class = "select">
            <option value="married">Married</option>
            <option value="single">Single</option>
            <option value="windowed">Windowed</option>
            <option value="divorced">Divorced</option>
        </select>



        <div class="field"> 
            <label class="label" for="personas">Personas</label>
        <div class="control">
                <textarea name = "personas" placeholder="Artist Personas" class="textarea" required > {{ old ('personas')}} </textarea>
            </div>
        </div>

        <div class="field">
            <button type="submit" class="button is-link"> Create Artist </button>
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