@extends('layout')

@section('content')

        <style>
            
  body
{ 

  
  background-blend-mode: color;background-color: rgba(255,255,255,0.9) !important;
  background-image: url("https://www.printablee.com/postpic/2012/06/flower-embroidery-designs-patterns_256659.jpg"); 
  
}
</style>
        

        <section class="hero is-large" style="background-image: url('https://images1.purplesneakers.com.au/2019/06/27b3afc7efe5cbf4ff68550c7e638fc7.jpg');  background-size: 100% 100%;">
            <div class="hero-body">
        <div class="container">
                <h1 class="title is-1 " style="color:white">Event</h1>
                <h2 class="subtitle" style="color: white"> <br> </h2>
                <a href="#" class="button is-white is-medium ">Find out more</a>
            </div> 
            </div>
        </section>
        <section class="section">
            <div class="container has-text-centered">
                <h2 class="title"></h2>
                <p></p>
    
                {{--<div class="columns is-centered" style="padding: 2rem"> --}}
                    @foreach ($events as $event)
                    <div class="hero-body">
                        <div class="container has-text-centered">
                            <div class="columns is-vcentered">
                                <div class="column is-5">
                                    <figure class="image is-4by3">
                                        <img src="https://www.myfiji.com/wp-content/uploads/sites/20/2020/06/Fiji-Culture-and-Religion2.jpg" alt="Description">
                                    </figure>
                                </div>
                                <div class="column is-6 is-offset-1">
                                    <h1 class="title is-2">
                                        Spring Event
                                    </h1>
                                    <h2 class="subtitle is-4">
                                        To be updated
                                    </h2>
                                    <br>
                                    <p class="has-text-centered">
                                        <a class="button is-medium is-info is-outlined">
                                            Craft
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Music
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Performing Arts
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Visual Arts
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="hero-body">
                        <div class="container has-text-centered">
                            <div class="columns is-vcentered">
                                <div class="column is-5">
                                    <figure class="image is-4by3">
                                        <img src="https://www.myfiji.com/wp-content/uploads/sites/20/2020/06/Fiji-Culture-and-Religion2.jpg" alt="Description">
                                    </figure>
                                </div>
                                <div class="column is-6 is-offset-1">
                                    <h1 class="title is-2">
                                        Autumn Event
                                    </h1>
                                    <h2 class="subtitle is-4">
                                        To be updated
                                    </h2>
                                    <br>
                                    <p class="has-text-centered">
                                        <a class="button is-medium is-info is-outlined">
                                            Craft
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Music
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Performing Arts
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Visual Arts
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-body">
                        <div class="container has-text-centered">
                            <div class="columns is-vcentered">
                                <div class="column is-5">
                                    <figure class="image is-4by3">
                                        <img src="https://lh3.googleusercontent.com/proxy/rb30-rOYYk17xc6PeFwwyTmZtnNisB_8ccN7o_tRcipkfGAf1u-TenKhkao3c6V5dk1lL6NSp534mVJ5Wnbx_rYtTjl3RrmG2nkZk4YnRi17Ll3jW2Z-w_6M46xQqttw" alt="Description">
                                    </figure>
                                </div>
                                <div class="column is-6 is-offset-1">
                                    <h1 class="title is-2">
                                        Summer Event
                                    </h1>
                                    <h2 class="subtitle is-4">
                                        To be updated
                                    </h2>
                                    <br>
                                    <p class="has-text-centered">
                                        <a class="button is-medium is-info is-outlined">
                                            Craft
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Music
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Performing Arts
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Visual Arts
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-body">
                        <div class="container has-text-centered">
                            <div class="columns is-vcentered">
                                <div class="column is-5">
                                    <figure class="image is-4by3">
                                        <img src="https://exclusivesmedia.webjet.com.au/uploads/2019/04/6-day-Fiji-Islands-Blue-Lagoon-cruise-9.jpg" alt="Description">
                                    </figure>
                                </div>
                                <div class="column is-6 is-offset-1">
                                    <h1 class="title is-2">
                                        Winter Event
                                    </h1>
                                    <h2 class="subtitle is-4">
                                        To be updated
                                    </h2>
                                    <br>
                                    <p class="has-text-centered">
                                        <a class="button is-medium is-info is-outlined">
                                            Craft
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Music
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Performing Arts
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Visual Arts
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hero-body">
                        <div class="container has-text-centered">
                            <div class="columns is-vcentered">
                                <div class="column is-5">
                                    <figure class="image is-4by3">
                                        <img src="https://imageproxy.themaven.net//https%3A%2F%2Fedm.com%2F.image%2FMTY5MjMxNzE3OTMwOTAzMDAz%2Fyour-paradise-2019.jpg" alt="Description">
                                    </figure>
                                </div>
                                <div class="column is-6 is-offset-1">
                                    <h1 class="title is-2">
                                        Spring Event
                                    </h1>
                                    <h2 class="subtitle is-4">
                                        To be updated
                                    </h2>
                                    <br>
                                    <p class="has-text-centered">
                                        <a class="button is-medium is-info is-outlined">
                                            Craft
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Music
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Performing Arts
                                        </a>
                                        <a class="button is-medium is-info is-outlined">
                                            Visual Arts
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                {{--</div>--}}
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
    
    

@endsection