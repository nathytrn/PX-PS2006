@extends('layout')

@section('content')
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
                            @foreach ( $videos as $videos)
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-white">
                                    <p class="title">{{ $videos->type }}</p>
                                    <p class="subtitle">{{ $videos->description }}</p>
                                    
                                        <video width="1280" height="720" controls loop>
                                            <source src="{{ asset($videos->url) }}" type="video/mp4">
                                            
                                       </video>
                                    
                                </article>

                                <form method="POST" action="/artist/gallery/{{$videos->id}} ">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field()}}
                                    <div class="field">
                                        <div class="control">   
                                            <button type = "submit" class="button">Delete Video</button>
                                        </div>
                                    </div>
                            
                                </form>
                            </div>                  
                            @endforeach
                                
                        </div>

                        <div class="card-table">                            
                            @foreach ( $images as $images)
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-white">
                                    <p class="title">{{ $images->type }}</p>
                                    <p class="subtitle">{{ $images->description }}</p>
                                    <figure class="image is-4by3">
                                        <img  src="{{ asset($images->url) }}"
                                         alt="Description">
                                    </figure>
                                </article>

                                <form method="POST" action="/artist/gallery/{{$images->id}} ">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field()}}
                                    <div class="field">
                                        <div class="control">   
                                            <button type = "submit" class="button">Delete Image</button>
                                        </div>
                                    </div>
                            
                                </form>
                            </div>                  
                            @endforeach
                                
                        </div>
                        
                    </div>
                </div>
               
            </div>

            
        </div>
    </div>
</div>

@endsection