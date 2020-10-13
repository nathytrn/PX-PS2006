@extends('layout')

@section('content')
    <style>
            
            body {

        background-image: url("https://pngimage.net/wp-content/uploads/2018/06/travel-background-png-2.png");
    }
    </style>
    <h1 class="header"><center> Create new artist </center> </h1>
    <div class="container">
    <div class="content">
        <form method="POST" action="/artists">
            {{ csrf_field()}}
            <div class ="field">
                <label class="label" for="firstName">First Name</label>

                <div class="control">
                <input type = "text" name ="firstName"  class="input" value = "{{ old ('firstName')}}">
                </div>
            </div>

            <div class ="field">
                <label class="label" for="lastName">Last Name</label>

                <div class="control">
                <input type = "text" name ="lastName" class="input"  value = "{{ old ('lastName')}}">
                </div>
            </div>

            <div class ="field">
                <label class="label" for="DOB">Date of Birth</label>

                <div class="control">
                <input type = "date" name ="DOB"class="input" value = "{{ old ('DOB')}}">
                </div>
            </div>


            <div class ="field">
                <label class="label" for="address">Address</label>

                <div class="control">
                <input type = "text" name ="address" class="input" value = "{{ old ('address')}}">
                </div>
            </div>


            <div class ="field">
                <label class="label" for="postcode">Postcode</label>

                <div class="control">
                <input type = "text" name ="postcode" class="input" value = "{{ old ('postcode')}}">
                </div>
            </div>
            
            <div class ="field">
                <label class="label" for="email">Email</label>

                <div class="control">
                <input type = "text" name ="email" placeholder="Email" class="input" value = "{{ old ('phoneNumber')}}">
                </div>
            </div>


            <div class ="field">
                <label class="label" for="phoneNumber">Phone Number</label>

                <div class="control">
                <input type = "text" name ="phoneNumber" placeholder="Phone Number" class="input" value = "{{ old ('phoneNumber')}}">
                </div>
            </div>


            <div class="field"> 
                <label class="label" for="bio">Bio</label>
            <div class="control">
                    <textarea name = "bio" placeholder="Artist Bio" class="textarea"  > {{ old ('bio')}} </textarea>
                </div>
            </div>


            <label for="creativeDiscipline1" class="label">Creative Discipline 1:</label>

            <select name="creativeDiscipline1" id="creativeDiscipline1" class = "select">
                <option value="Crafts">Crafts</option>
                <option value="Visual Arts">Visual Arts </option>
                <option value="Performing Arts">Performing Arts</option>
                <option value="Music">Music</option>
            </select>

            <div class="field"> 
                <label class="label" for="creativeDetails1">Description 1:</label>
            <div class="control">
                    <textarea name = "creativeDetails1" placeholder="Dicipline Details" class="textarea"  > {{ old ('creativeDetails1')}} </textarea>
                </div>
            </div>

            <label for="creativeDiscipline2" class="label">Creative Discipline 2:</label>

            <select name="creativeDiscipline2" id="creativeDiscipline2" class = "select">
                <option value="Crafts">Crafts</option>
                <option value="Visual Arts">Visual Arts </option>
                <option value="Performing Arts">Performing Arts</option>
                <option value="Music">Music</option>
            </select>

            <div class="field"> 
                <label class="label" for="creativeDetails2">Description 2:</label>
            <div class="control">
                    <textarea name = "creativeDetails2" placeholder="Dicipline Details" class="textarea"  > {{ old ('creativeDetails2')}} </textarea>
                </div>
            </div>

            <div class ="field">
                <label class="label" for="facebook">Facebook</label>

                <div class="control">
                <input type = "text" name ="facebook" class="input" value = "{{ old ('facebook')}}">
                </div>
            </div>

            <div class ="field">
                <label class="label" for="instagram">Instagram</label>

                <div class="control">
                <input type = "text" name ="instagram" class="input" value = "{{ old ('address')}}">
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

    </div>
</div>


    
@endsection