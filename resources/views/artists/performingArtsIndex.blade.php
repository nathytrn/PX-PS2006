@extends('layout')

@section('content')


        <style>
            body
        { 
          
            
            background-blend-mode: color;background-color: rgba(255,255,255,0.4) !important;
            background-image: url("https://i.pinimg.com/originals/b5/45/14/b545148402745b4d2ab3d3c16546157a.jpg"); 
            
        }
        </style>

            <link href="{{ asset('css/w3.css') }}" rel="stylesheet">   

            <section class="hero is-large" style="background-image: url('https://www.myfiji.com/wp-content/uploads/sites/20/2019/12/Experience-the-Energy-Spirit-Mana.jpg'); background-size: cover; background-position: fixed;">
                <div class="hero-body">
                <div class="container">
                    <h1 class="title is-1 " style="color: white; font-size: 70px;">Performing Art</h1>
                    <h2 class="subtitle" style="color: white"> <br> </h2>
                
                </div> 
                </div>
            </section>

            
            
            <div class="w3-row-padding" style="">
              
                @foreach ($artists as $artists)
                <a href="/artists/{{$artists->id}}">
              <div class="card w3-col l3 m6 w3-margin-bottom" style="margin: 5px; width:460px; padding:10px" >
                <img src="{{ asset('/storage/public/'.$artists->id.'/avatar.jpg') }}" style="width:440px; 
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
