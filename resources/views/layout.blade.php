<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fiji National Artist Directory</title>
    {{--<link rel="shortcut icon" href="../images/fav_icon.png" type="image/x-icon">--}}
    <!-- Bulma Version 0.9.0-->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Marcellus+SC&display=swap">
    <link rel="stylesheet" type="text/css" href="../css/personal.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <script async type="text/javascript" src="../js/bulma.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
    

       <style> 

        body {
            background-blend-mode: color;background-color: rgba(255,255,255,0.5) !important;
        background-image: url("https://st.depositphotos.com/2200898/2794/v/950/depositphotos_27946241-stock-illustration-classic-wallpaper-seamless-vintage-flower.jpg"); 

        /*
        background-image: url("https://i0.wp.com/onaircode.com/wp-content/uploads/2019/09/css3-gradient.jpg?resize=1024%2C588&ssl=1g");*/

        font-family: 'Marcellus SC', serif;
        font-size: 22px;

        }
        

        .bigTitle{
            font-size: 80px;
        }

        .navbar.is-float {
            
            
            top: 0;
            width: 100%;

        }

        

                .fa {
        padding: 10px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        }

        .fa:hover {
            opacity: 0.7;
        }

        .fa-facebook {
        background: #3B5998;
        color: white;
        }

        .fa-twitter {
        background: #55ACEE;
        color: white;
        }

        .fa-instagram {
        background: #ea4c89;
        color: white;
        }

        

    </style>

</head>

<body>
    
    <nav class="navbar is-float">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="https://i.imgur.com/pk3i4G7.png"  width="150" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="{{ url('/') }}">
                    Home
                </a>
                <div class="navbar-item has-dropdown is-hoverable" >
                    <a class="navbar-link" href="{{ url('/artists') }}">
                        Artists
                    </a>
                    <div class="navbar-dropdown is-boxed">
                        <a class="navbar-item" href="{{ url('/artists/crafts') }}">
                            Crafts
                        </a>
                        <a class="navbar-item" href="{{ url('/artists/visualarts') }}">
                            Visual Arts
                        </a>
                        <a class="navbar-item" href="{{ url('/artists/performingarts') }}">
                            Performing Arts 
                        </a>
                        <a class="navbar-item" href="{{ url('/artists/music') }}">
                            Music
                        </a>
                    </div>
                </div>
                <a class="navbar-item" href="{{ url('/events') }}">
                    Event
                </a>
                <a class="navbar-item" href="">
                    Contact
                </a>
                
                
                   
                <form action="/artists/result" method="GET" class="navbar-item">
                @csrf

                <input class="input" name="name"  type="text" placeholder="Search . . .">
                
                

                <a class="navbar-item" href="">
                    <button class="button is-primary">Search</button>
                </a>

                </form>
                        
                    
                
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div >
                        @if (Route::has('login'))                                  
                        @auth                          
                            <a href="{{ url('/home') }}">Account Page</a>
                            @if (  auth()->check() && auth()->user()->is_admin == 1)
                            <a href="/admin/home">Admin Page</a>
                            @endif

                            @if (  auth()->check() && auth()->user()->is_artist == 1)
                            <a href="/artist/home">Artist Page</a>
                            @endif

                            
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Log Out
                           </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                            </form>
                            
                            
                            
                        @else 
                            <a href="{{ route('login') }}">Login</a>
                            

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth                                  
                        @endif

                    </div>
                    <div class="field">                       
                        
                    </div>
                </div>
            </div>
        </div>
    </nav>

            

    
    @yield('content')
    
    
    <section class="section">
        <div class="container has-text-centered">
            <h2 class="title">Contact</h2>

            <form>
                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="text" placeholder="Name">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <textarea class="textarea" placeholder="Message us"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="field is-horizontal">
                    <div class="field-body">
                        <div class="field">
                            <div class="control">
                                <button class="button is-primary">
                                    Send message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <a href="">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-instagram fa-2x"></i>
                    </a>                   
                </p>
            
            </div>
        </div>
    </section>

        <script src="../js/bulma.js"></script>
</body>

</html>