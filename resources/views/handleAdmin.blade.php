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
                    <li><a>Artist</a></li>
                    <li><a>Users</a></li>
                    <li><a>Events</a></li>
                </ul>
                <p class="menu-label">
                    Administration
                </p>
                <ul class="menu-list">
                    <li><a>Team Settings</a></li>
                    <li>
                        <a>Manage Artist</a>
                        <ul>
                            <li><a>Artist List</a></li>
                            <li><a>Plugins</a></li>
                            <li><a href="/artists/create">Add an artist</a></li>
                            <li><a>Edit an artist</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>Manage Events</a>
                        <ul>
                            <li><a>Event List</a></li>
                            <li><a>Plugins</a></li>
                            <li><a href="/events/create">Add an event</a></li>
                            <li><a>Edit an event</a></li>
                        </ul>
                    </li>
                </ul>
                <p class="menu-label">
                    Transactions
                </p>
                <ul class="menu-list">
                    <li><a>Payments</a></li>
                    <li><a>Transfers</a></li>
                    <li><a>Balance</a></li>
                    <li><a>Reports</a></li>
                </ul>
            </aside>
        </div>
        <div class="column is-9">
            <nav class="breadcrumb" aria-label="breadcrumbs">
                <ul>
                    
                    <li><a href="../">Admin</a></li>
                    <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
                </ul>
            </nav>
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Hello, Admin.
                        </h1>
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
                            <p class="title">{{ $users->count() }}</p>
                            <p class="subtitle">Users</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $artists->count() }}</p>
                            <p class="subtitle">Artist</p>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child box">
                            <p class="title">{{ $requests->count() }}</p>
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
                                <style>
                                    .content table td,
                                    .content table th {
                                    border: 1px solid #dbdbdb;;
                                    border-width: 0 0 2px;
                                    padding: 0.5em 0.80em;
                                    vertical-align: top;
                                    }
                                    
                                </style>
                                 
                                
        
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
                                            <td>Artist</td>
                                            <td>Description</td>
                                            <td>Stage</td>
                                            <td>Action</td>
                                            
                                        </tr>
                                                
                                            @foreach ( $requests as $requests)
                                            <tr>
                                            
                                                <td>{{ $requests->title}}</td>
                                                <td>{{ $requests->artist->firstName}} {{ $requests->artist->lastName}}</td>
                                                <td>{{  $requests->description }}</td>
                                                <td>{{  $requests->stage }}</td>
                                                <td>                                        
                                                <a class="button is-primary" href="/orders/admin/{{$requests->id}}" >Modify</a>                                              
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
                            <p class="card-header-title" >Artists </p>
                            <button onclick="myFunction2()" class="button is-primary" style="margin: 10px">View All/ Collapse</button>                       
                        </header>
                        <div class="card-table" id = "div2" style="display: none">
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
                                            <td>Full Name</td>
                                            <td>Email</td>
                                            <td>Phone Number</td>
                                            <td>Creative Discipline</td>
                                            <td>Action</td>
                                            
                                        </tr>
                                                
                                            @foreach ( $artists as $artists)
                                            <tr>
                                            
                                                <td>{{ $artists->firstName }} {{ $artists->lastName }}</td>
                                                <td>{{ $artists->email }}</td>
                                                <td>{{ $artists->phoneNumber }}</td>
                                                <td>{{ $artists->creativeDiscipline1 }} / {{ $artists->creativeDiscipline2 }}</td>
                                                <td>                                        
                                                <a class="button is-primary" href="artists/{{$artists->id}}/edit">Edit</a>                                              
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
                                                <a class="button is-primary" href="events/{{$requests->id}}/edit">Modify</a>                                              
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
                             Users     
                            
                                          
                            </p>

                            <button onclick="myFunction4()" class="button is-primary" style="margin: 10px">View All/ Collapse</button>
                            
                        </header>
                        <div class="card-table" id = "div4" style="display: none">
                            <div class="content">
                            <table class="table is-fullwidth is-striped">                               
                                    <tbody>
                                        <tr>    
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr> 
                                        <tr>
                                            <td>User ID</td>
                                            <td>Name</td>
                                            <td>Email</td>
                                            <td>Artist ID</td>
                                            <td>Artist Account</td>
                                            <td>Action</td>
                                            
                                        </tr>
                                                
                                            @foreach ( $users as $users)
                                            <tr>
                                            
                                                <td>{{ $users->id }}</td>
                                                <td>{{ $users->name }} </td>
                                                <td>{{ $users->email }}</td>
                                                <td>{{ $users->artist_id }}</td>
                                                <td>
                                                    <form method="POST" action="/admin/users/{{$users->id}}}">
                                                          @csrf  
                                                          {{method_field('PATCH')}}
                                                          <div>
                                                              <input type="checkbox" name = "is_artist" value ="1">        
                                                              <label for="is_artist">Y</label>
                                                          </div>

                                                          <div>
                                                            <input type="checkbox" name = "is_artist" value ="0">        
                                                            <label for="is_artist">N</label>
                                                        </div>
                                                          

                                                    
                                                
                                                
                                                
                                                </td>
                                                <td>                                        
                                                        
                                                    <input type="submit" value="Submit" class="button is-primary">
                                                    </form>
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

                function myFunction2() {
                  var x = document.getElementById("div2");
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

                function myFunction4() {
                  var x = document.getElementById("div4");
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