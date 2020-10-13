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

            <div class="columns">
                <div class="column is-12">
                    <div class="card events-card">
                        <header class="card-header">                                                    
                            
                        </header>
                        <div class="card-table">                            
                            <form method ="POST" action="/orders/{{ $order->id}}">
                                @method('PATCH')
                                @csrf 
                                <div class ="field">
                                    <label class="label" for="title">Title</label>
                            
                                    <div class="control">
                                        <input type = "text" name ="title" class="input is-medium"  value = "{{ $order->title}}">
                                    </div> 
                                </div>

                                <div class ="field">
                                    <label class="label" for="date">Date</label>
                            
                                    <div class="control">
                                        <input type = "date" name ="date" class="input is-medium"  value = "{{ $order->date}}">
                                    </div> 
                                </div>

                                <div class ="field">
                                    <label class="label" for="time">Time</label>
                            
                                    <div class="control">
                                        <input type = "time" name ="time" class="input is-medium"  value = "{{ $order->time }}">
                                    </div> 
                                </div>

                                <div class="field">
                                    <label class="label" for="stage">Stage</label>
                                    

                                    <select name="stage" class="select" style="width: 360px; height: 45px;">
                                        <option selected value = "{{ $order ->stage}}"> {{ $order ->stage}}</option>
                                        <option value="Created">Created</option>                                       
                                        <option value="Artist Confirmed">Artist Confirmed</option>                                      
                                        <option value="Payment Received">Payment Received</option>                                                                                             
                                    </select>
                                </div>
                                
                                

                                <div class ="field">
                                    <label class="label" for="description">Description</label>
                            
                                    <div class="control">
                                        <textarea name ="description" class="textarea" >{{ $order->description }} </textarea>
                                    </div> 
                                </div>

                                <div class ="field">
                                    <label class="label" for="note">Note</label>
                            
                                    <div class="control">
                                        <textarea name ="note" class="textarea" >{{ $order->note }} </textarea>
                                    </div> 
                                </div>
                            

                                
                                  
                                
                                <div class="field">
                                    <button type="submit" class="button is-link"> Update </button>
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
               
            </div>

            
        </div>
    </div>
</div>

@endsection