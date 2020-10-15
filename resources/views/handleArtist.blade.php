@extends('layout')

@section('content')
<style>
   
</style>
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                    
                    <li><a>Events</a></li>
                </ul>
                <p class="menu-label">
                    Your Profile
                </p>
                <ul class="menu-list">
                    @if (auth()->user()->artist_id != 0)
                    <li><a href="/artists/{{auth()->user()->artist_id}}/edit">Edit Your Profile</a></li>
                    @endif
                    <li>
                        <a>Payment Options</a>
                        <a href="/artist/upload">Upload Images </a>
                        <a href="/artist/gallery">Images Gallery</a>
                        <a href="/events/create">Create an event</a>
                    </li>                 
                </ul>
                <p class="menu-label">
                    Transactions
                </p>
                <ul class="menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    
                    <li><a href="../">Artist</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
                </ul>
            </nav>
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Hello, 
                        <h2 class="subtitle">
                            I hope you are having a great day!
                        </h2>
                    </div>
                </div>
            </section>

            <section class="info-tiles">
                <div class="tile is-ancestor has-text-centered">
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $orders->count() }}</p>
                            <p class="subtitle">Open Orders</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $events->count() }}</p>
                            <p class="subtitle">Events</p>
                        </article>
                    </div>
                    
                </div>
            </section>

            @if (auth()->user()->artist_id == 0)
            <div class="columns">
                <div class="column is-12">
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title" >Create Your Profile</p>
                        </header>
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
                                    <label class="label" for="email">Email</label>
                        
                                    <div class="control">
                                    <input type = "text" name ="email" class="input" value = "{{ old ('email')}}">
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
                                    <label class="label" for="phoneNumber">Phone Number</label>
                        
                                    <div class="control">
                                    <input type = "text" name ="phoneNumber" placeholder="Phone Number" class="input" value = "{{ old ('phoneNumber')}}">
                                    </div>
                                </div>
                                
                                <div class="field"> 
                                    <label class="label" for="bio">Bio</label>
                                <div class="control">
                                        <textarea name = "bio" placeholder="Artist Bio" class="textarea "  > {{ old ('bio')}} </textarea>
                                    </div>
                                </div>
                        
                        
                                <label for="creativeDiscipline1" class="label">Creative Discipline 1:</label>
                        
                                <select name="creativeDiscipline1" id="creativeDiscipline1" class = "select">
                                    <option value="Crafts">Crafts</option>
                                    <option value="Visual Arts">Visual Arts </option>
                                    <option value="Performing Arts">Performing Arts</option>
                                    <option value="Music">Music</option>
                                </select>
                        
                                <label for="creativeDiscipline2" class="label">Creative Discipline 2:</label>
                        
                                <select name="creativeDiscipline2" id="creativeDiscipline2" class = "select">
                                    <option value="Crafts">Crafts</option>
                                    <option value="Visual Arts">Visual Arts</option>
                                    <option value="Performing Arts">Performing Arts</option>
                                    <option value="Music">Music</option>
                                </select>
                        
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
                                    <label class="label" for="note">Note</label>
                                <div class="control">
                                        <textarea name = "note" placeholder="Artist Note" class="textarea"  > {{ old ('note')}} </textarea>
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
                        </header>
                        <div class="card-table" id = "div1"  style="display: none">
                            <div class="content">
                                
                            </div>
                        </div>      
                    </div>
                </div>      
            </div>

            @endif

            <div class="columns">
                <div class="column is-12">
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title" >
                             Orders                                                
                            </p>

                            <button onclick="myFunction()" class="button is-primary" style="margin: 10px">View All/ Collapse</button>
                                
                            
                        </header>
                        <div class="card-table" id = "div1"  style="display: none">
                            <div class="content">
                                <table class="table is-fullwidth is-striped" >                                  
                                    <tbody>
                                        <tr>
                                            <td> </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td>Title</td>
                                            <td>User Name</td>
                                            <td>Description</td>
                                            <td>Stage</td>
                                            <td>Action</td>
                                            
                                        </tr>
                                                
                                            @foreach ( $orders as $orders)
                                            <tr>
                                            
                                                <td>{{ $orders->title}}</td>
                                                <td>{{ $orders->user->name}} </td>
                                                <td>{{  $orders->description }}</td>
                                                <td>{{  $orders->stage }}</td>  
                                                <td>                                        
                                                <a class="button is-primary" href="/orders/artist/{{$orders->id}}">Modify</a>                                              
                                                </td>
                                                
                                            </tr>                  
                                            @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>      
                    </div>
                </div>      
            </div>


            <div class="columns">
                <div class="column is-12">
                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title" >
                             Events                                         
                            </p>

                            <button onclick="myFunction3()" class="button is-primary" style="margin: 10px">View All/ Collapse</button>
                            
                        </header>
                        <div class="card-table" id = "div3" style="display: none">
                            <div class="content">
                            <table class="table is-fullwidth is-striped">                               
                                    <tbody>
                                        <tr>    
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td>Title</td>
                                            <td>Date/Time</td>
                                            <td>Location</td>
                                            <td>Description</td>
                                            <td>Action</td>
                                            
                                        </tr>
                                                
                                            @foreach ( $events as $events)
                                            <tr>
                                            
                                                <td>{{ $events->title }}</td>
                                                <td>{{ $events->date }} {{ $events->time }}</td>
                                                <td>{{ $events->location }}</td>
                                                <td>{{ $events->description }}</td>
                                                <td>                                        
                                                <a class="button is-primary" href="events/{{$events->id}}/edit">Modify</a>                                              
                                                </td>
                                                
                                            </tr>
                                            
                                            @endforeach
                                        

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>


            <script>
                function myFunction() {
                  var x = document.getElementById("div1");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }


                function myFunction3() {
                  var x = document.getElementById("div3");
                  if (x.style.display === "none") {
                    x.style.display = "block";
                  } else {
                    x.style.display = "none";
                  }
                }
                </script>
        </div>
    </div>
</div>
@endsection





















{{--


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders Tracking</div>
                <div class="card-body">
                    
                    <div>

                        
                        @foreach ( $orders as $orders)
                        <div>
                            <li>  Client: {{ $orders->user->name}} 
                                <p>-- Order Description : {{ $orders->description}} </p>
                                <p>-- Current stage : {{ $orders ->stage}} </p>
                                <p>-- Artist Name:{{$orders->artist->firstName}} {{$orders->artist->lastName}} </p>
                                
                                <form method ="POST" action="/orders/{{ $orders->id}}">
                                    @method('PATCH')
                                    @csrf                                   
                                        <label for="stage" class="selected">
                                            <select name="stage" id="stage" class = "select">
                                                <option selected value = "{{ $orders ->stage}}"> {{ $orders ->stage}}</option>                                       
                                                <option value="Artist Confirmed">Artist Confirmed</option>
                                                <option value="Waiting for Payment">Waiting for Payment</option>
                                                <option value="Payment Received">Payment Received</option>                                                       
                                            </select>
                                        </label>

                                        <div class="field"> 
                                            <label class="label" for="note">Note</label>
                                            <div class="control">
                                                <textarea name = "note" class="textarea" > {{ $orders->note}} </textarea>
                                            </div>
                                        </div>
                    
                                        <div class="field">
                                            <button type="submit" class="button is-link"> Update </button>
                                        </div>
                    
                                    
                                    
                                    
                                </form> 
                            </li>
                            
                        </div>
                        
                        @endforeach
                        
                    </div>
    
                    
                </div>
               
                
            
            </div>
            

            <br>
            @if (auth()->user()->artist_id == 0)
            
            <div class="card">
                <div class="card-header">Create your profile</div>
                    <div class="card-body">
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
                                <label class="label" for="email">Email</label>
                    
                                <div class="control">
                                <input type = "text" name ="email" class="input" value = "{{ old ('email')}}">
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
                                <label class="label" for="phoneNumber">Phone Number</label>
                    
                                <div class="control">
                                <input type = "text" name ="phoneNumber" placeholder="Phone Number" class="input" value = "{{ old ('phoneNumber')}}">
                                </div>
                            </div>
                            
                            <div class="field"> 
                                <label class="label" for="bio">Bio</label>
                            <div class="control">
                                    <textarea name = "bio" placeholder="Artist Bio" class="textarea "  > {{ old ('bio')}} </textarea>
                                </div>
                            </div>
                    
                    
                            <label for="creativeDiscipline1" class="label">Creative Discipline 1:</label>
                    
                            <select name="creativeDiscipline1" id="creativeDiscipline1" class = "select">
                                <option value="Crafts">Crafts</option>
                                <option value="Visual Arts">Visual Arts </option>
                                <option value="Performing Arts">Performing Arts </option>
                                <option value="Music">Music</option>
                            </select>
                    
                            <label for="creativeDiscipline2" class="label">Creative Discipline 2:</label>
                    
                            <select name="creativeDiscipline2" id="creativeDiscipline2" class = "select">
                                <option value="Crafts">Crafts</option>
                                <option value="Visual Arts">Visual Arts </option>
                                <option value="Performing Arts">Performing Arts </option>
                                <option value="Music">Music</option>
                            </select>
                    
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
                                <label class="label" for="note">Note</label>
                            <div class="control">
                                    <textarea name = "note" placeholder="Artist Note" class="textarea"  > {{ old ('note')}} </textarea>
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
            </div>
            @endif

            
            
            




            @if (auth()->user()->artist_id != 0)
            <div class="card">
                <div class="card-header">Update Details</div>
                    <div class="card-body">
                        
                           
                        <form method="POST" action="/artists/{{ auth()->user()->artist_id }}">
                            {{ csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class ="field">
                                <label class="label" for="firstName">First Name</label>
                    
                                <div class="control">
                                <input type = "text" name ="firstName"  class="input" value = "{{$requests->firstName}}">
                                </div>
                            </div>
                    
                            <div class ="field">
                                <label class="label" for="lastName">Last Name</label>
                    
                                <div class="control">
                                <input type = "text" name ="lastName" class="input"  value = "{{$requests->lastName}}">
                                </div>
                            </div>
                    
                            <div class ="field">
                                <label class="label" for="email">Email</label>
                    
                                <div class="control">
                                <input type = "text" name ="email" class="input" value = "{{$requests->email}}">
                                </div>
                            </div>
                    
                    
                            <div class ="field">
                                <label class="label" for="DOB">Date of Birth</label>
                    
                                <div class="control">
                                <input type = "date" name ="DOB"class="input" value = "{{$requests->DOB}}">
                                </div>
                            </div>
                    
                    
                            <div class ="field">
                                <label class="label" for="address">Address</label>
                    
                                <div class="control">
                                <input type = "text" name ="address" class="input" value = "{{$requests->address}}">
                                </div>
                            </div>
                    
                    
                            <div class ="field">
                                <label class="label" for="postcode">Postcode</label>
                    
                                <div class="control">
                                <input type = "text" name ="postcode" class="input" value = "{{$requests->postcode}}">
                                </div>
                            </div>
                            
                    
                            <div class ="field">
                                <label class="label" for="phoneNumber">Phone Number</label>
                    
                                <div class="control">
                                <input type = "text" name ="phoneNumber" placeholder="Phone Number" class="input" value = "{{$requests->phoneNumber}}">
                                </div>
                            </div>
                    
                            <div class="field"> 
                                <label class="label" for="bio">Bio</label>
                            <div class="control">
                                    <textarea name = "bio" placeholder="Artist Bio" class="textarea"  > {{$requests->bio}} </textarea>
                                </div>
                            </div>
                    
                    
                            <label for="creativeDiscipline1" class="label">Creative Discipline 1:</label>
                    
                            <select name="creativeDiscipline1" id="creativeDiscipline1" class = "select">
                                <option selected value=" {{ $requests->creativeDiscipline1}}"> {{ $requests->creativeDiscipline1}} </option>
                                <option value="Crafts">Crafts</option>
                                <option value="Visual Arts">Visual Arts </option>
                                <option value="Performing Arts">Performing Arts </option>
                                <option value="Music">Music</option>
                            </select>
                    
                            <label for="creativeDiscipline2" class="label">Creative Discipline 2:</label>
                    
                            <select name="creativeDiscipline2" id="creativeDiscipline2" class = "select">
                                <option selected value="{{ $requests->creativeDiscipline2}}"> {{ $requests->creativeDiscipline2}}</option>
                                <option value="Crafts">Crafts</option>
                                <option value="Visual Arts">Visual Arts </option>
                                <option value="Performing Arts">Performing Arts </option>
                                <option value="Music">Music</option>
                            </select>
                    
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
                                <label class="label" for="note">Note</label>
                            <div class="control">
                                    <textarea name = "note" placeholder="Artist Note" class="textarea"  > {{ old ('note')}} </textarea>
                                </div>
                            </div>
                    
                            <div class="field">
                                <button type="submit" class="button is-link">Update </button>
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
            </div>  

            @endif
            
            
        </div>
    </div>
</div>
@endsection

--}}