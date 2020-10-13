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
                    <li><a>Other</a></li>
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
                            <li><a>Add an artist</a></li>
                            <li><a>Edit an artist</a></li>
                        </ul>
                    </li>
                    <li><a>Invitations</a></li>
                    <li><a>Cloud Storage Environment Settings</a></li>
                    <li><a>Authentication</a></li>
                    <li><a>Payments</a></li>
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
                            {{ $order-> title}}
                        </h1>
                        <h2 class="subtitle">
                            Artist: {{ $order->artist->firstName}}  {{ $order->artist->lastName}}
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
                                        <option value="Waiting for Payment">Waiting for Payment</option>
                                        <option value="Payment Received">Payment Received</option>      
                                        <option value="Close Complete">Close Complete</option> 
                                        <option value="Close Failed">Close Failed</option>                                                  
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