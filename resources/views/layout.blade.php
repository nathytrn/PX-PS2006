<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.9.0-->
  <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
  <link rel="stylesheet" type="text/css" href="../css/personal.css">
  <script async type="text/javascript" src="../js/bulma.js"></script>
</head>

<body><section class="hero is-bold">
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
                                <li><a href="{{ url('/artists') }}">Artists</a></li>
                                <li><a href="">About Us</a></li>
                            </ul>
                        </div>

                        
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <div class="section">
        @yield('content')
    </div>

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