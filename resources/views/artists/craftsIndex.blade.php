@extends('layout')

@section('content')


        <style>
           
        body
        { 
          
            
            background-blend-mode: color;background-color: rgba(255,255,255,0.4) !important;
            background-image: url("https://i.pinimg.com/originals/71/87/e5/7187e53808c25a2a79715e92b1f59e22.jpg"); 
            
        }
    
        </style>

<section class="hero is-large" style="background-image: url('https://blog.alaskaair.com/wp-content/uploads/2020/01/1T3A6052.jpg') ; background-repeat: no-repeat; background-size: cover; background-size: 100% 100%;
">
    <div class="hero-body">
      <div class="container">
        <h1 class="title is-1 " style="color: white; font-size: 70px;"">Crafts and Arts</h1>
        <h2 class="subtitle" style="color: white"> <br> </h2>
       
      </div> 
    </div>
  </section>

 
         <link href="{{ asset('css/w3.css') }}" rel="stylesheet">   

         
            <div class="w3-row-padding" style="">
                @foreach ($artists as $artists)
                <a href="/artists/{{$artists->id}}">
              <div class="card w3-col l3 m6 w3-margin-bottom" style="margin: 5px; width:460px; padding:10px" >
                <img src="{{ asset('/storage/'.$artists->id.'/avatar.jpg') }}" style="width:440px; 
                        height:333px; max-width: 500px; max-height: 333px; object-fit: fill;">
                <h3>{{$artists->firstName}} {{$artists->lastName}}</h3>
                <p class="w3-opacity">CEO & Founder</p>
                <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                <p><button class="button is-primary is-fullwidth">Contact</button></p>
              </div>
                </a>

                
              @endforeach
            </div>
          </div>
          
       
@endsection
