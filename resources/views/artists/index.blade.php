<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiji Arts</title>
    <link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    <style type="text/css">
        html,
        body {
            font-family: 'Open Sans';
        }

        img {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <section class="hero is-fullheight is-default is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-item">
                        <h1>Creative Industries Directory FIJI</h1>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
                                <ul>                            
                                    @if (Route::has('login'))                                  
                                            @auth
                                                <li><a href="{{ url('/home') }}">Home</a></li>
                                            @else
                                                <li><a href="{{ url('/') }}">Home</a></li>
                                                <li><a href="{{ route('login') }}">Login</a></li>

                                                @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}">Register</a></li>
                                                @endif
                                            @endauth                                  
                                    @endif
                                    <li><a href="{{ url('/events') }}">Events</a></li>
                                    <li class="is-active"><a href="">Artists</a></li>
                                    <li><a href="">About Us</a></li>
                                </ul>
                            </div>

                            
                            
                                
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <section class="section">
            <div class="container has-text-centered">
                <h2 class="title">Artist List</h2>
                <p></p>
    
                <div class="columns is-centered" style="padding: 2rem">
                    @foreach ($artists as $artist)
                    <div class="column">
                        <a href="/artists/{{ $artist->id}}">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image is-2by1">
                                        <img src="" alt="Placeholder image">
                                    </figure>
                                </div>
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-content">
                                            <p class="title is-4">{{ $artist -> name}}</p>
                                            <p class="subtitle is-6"></p>
                                        </div>
                                    </div>
        
                                    <div class="content">
                                        {{ $artist -> personas}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
            </div>
        </section>

        <div class="hero-foot">
            <div class="container">
                <div class="tabs is-centered">
                    <ul>
                        <li><a></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/bulma.js"></script>
</body>

</html>
