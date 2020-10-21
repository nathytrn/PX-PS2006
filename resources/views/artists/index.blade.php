@extends('layout')

@section('content')


        
    <style>
        body
        {
            background-image: url("https://i.imgur.com/8KvIla3.jpg"); 
            
        }
    </style>
            

            <section class="hero is-large" style="background-image: url('https://602.a86.myftpupload.com/wp-content/uploads/2020/06/24361687298_32c31c292a_k-1130x580.jpg'); background-size: cover; ">
                <div class="hero-body">
                  <div class="container">
                    <h1 class="title is-1 " style="color: #3d4447; font-size: 70px;">&nbsp;&nbsp;Artist Directory</h1>
                    <h2 class="subtitle" style="color: white"> </h2>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" class="button is-white is-medium ">Explore All</a>
                   
                  </div> 
                </div>
              </section>

              <link href="{{ asset('css/w3.css') }}" rel="stylesheet">  

            
            

            
            
            <div class="w3-row-padding" style="">

                
                @foreach ($artists as $artists)
                
                    <a href="/artists/{{$artists->id}}">
                    <div class="card w3-col l3 m6 w3-margin-bottom" style="margin: 5px; width:460px; padding:10px; " >
                        <img src="{{ asset('/storage/public/'.$artists->id.'/avatar.jpg') }}" style="width:440px; 
                        height:333px; max-width: 500px; max-height: 333px; object-fit: fill;">
                        <h3>{{$artists->firstName}} {{$artists->lastName}}</h3>
                        
                        
                        <p><button class="button is-primary is-fullwidth">Contact</button></p>
                    </div>
                    </a>

                    
                    

                    

                    

                   

                    
                    
              
              @endforeach


            </div>
          </div>
          

                
@endsection
