@extends('layout')

@section('content')
    <style>

        body {

        background-image: url("https://media.mutualart.com/Images//2018_09/10/18/185835582/4382792d-15ea-4a15-87ee-7fdc15e996f2.Jpeg");
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
        font-family: 'Marcellus SC', serif;
        font-size: 22px;
        background-size: 100% 100%;
        }
    </style>
  <!-- About -->
  <section class="section" id="about">
    <!-- Title -->
    <div class="container has-text-centered">
      <h3 class="title is-2">{{$artist->firstName}} {{$artist->lastName}}</h3>
      <h4 class="subtitle is-5">----------</h4>
      <div class="container">
        <p><strong></strong></p>
      </div>
    </div>


    
    <div class="columns has-same-height is-gapless">
      <div class="column">
        <!-- Profile -->
        <div class="card" style = "height: 459px;">
          <div class="card-content">
              
            <h3 class="title is-4"><center>Profile</center></h3>
            
            <div class="content">
              <table class="table-profile ">
                <tr>
                  <th colspan="1"></th>
                  <th colspan="2"></th>
                </tr>
                <tr>
                  <td>Address:</td>
                  <td>{{$artist->address}}</td>
                </tr>
                <tr>
                  <td>Phone:</td>
                  <td>{{$artist->phoneNumber}}</td>
                </tr>
                <tr>
                  <td>Email:</td>
                  <td>{{$artist->email}}</td>
                </tr>
              </table>
            </div>
            
            <div class="buttons has-addons is-centered">
            <a href="{{$artist->facebook}}" class="fa fa-facebook"></a>
            <a href="{{$artist->instagram}}" class="fa fa-instagram"></a>
                      
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Profile picture -->
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img src="{{ asset('/storage/'.$artist->id.'/avatar.jpg') }}" alt="Artist Avatar">
            </figure>
          </div>
        </div>
      </div>
      <div class="column">
        <!-- Skills -->
        <div class="card" style=" height: 459px; overflow:scroll;" >
          <div class="card-content skills-content">
            <h3 class="title is-4"><center>Bio</center></h3>
            <div class="content" style="font-style: italic;">
                    {{$artist->bio}}
                    Paula has been carving since he was a young boy in his village Fulaga, in the Lau Group. The village of Fulaga is renown throughout Fiji for its long tradition of high-skilled wood carvers. Paula’s father was a carver, and Paula learnt how to carve tanoa, war clubs and figures from watching him. He moved to Suva in 1966 to attend Bible School. He left after 2 years and continued to carve. This time for the tourist markets on Viti Levu, the main island of Fiji. In 1994 went to the University of the South Pacific as a Part Time Tutor and later was invited by the Oceania Centre by Professor Epeli Hau’ofa to explore contemporary, creative wood carving.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


 
  <!-- Services -->
  <section class="section" id="services" style="background-image: url('https://www.publicdomainpictures.net/pictures/30000/velka/plain-white-background.jpg')">
    
        <div class="section-heading">
        <h3 class="title is-2 center" style="text-align: center"> Services</h3>
        <h4 class="subtitle is-5"></h4>
        </div>
        <br>
        <br>
    
    <div class="container">
      <div class="columns">
        <div class="column">
          <div>
            <div class="content">
                <center>
                    <a class="button is-medium is-info is-outlined">
                        {{$artist->creativeDiscipline1}}
                    </a>
                    <br>
                    <h4 class="title is-5">{{$artist->creativeDetails1}}</h4>
                </center>
              
            </div>
          </div>
        </div>
        <div class="column">
          <div>
            <div class="content">
                <center>
                <a class="button is-medium is-info is-outlined">
                    {{$artist->creativeDiscipline2}}
                </a>
                <br>
                <h4 class="title is-5">{{$artist->creativeDetails2}}</h4>
                
                </center>
            </div>
          </div>
        </div>
      </div>

    
    </div>
  </section>

  {{--
  <div class="section-dark my-work" id="my-work">
    <div class="container">
      <div
        class="columns is-multiline"
        data-aos="fade-in"
        data-aos-easing="linear"
      >
        <div class="column is-12" style="height: 100px; padding:70px">
          <h1 class="title has-text-centered section-title">My Work</h1>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=0');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=10');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=20');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=30');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=40');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=50');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=60');"
            ></figure>
          </a>
        </div>
        <div class="column is-3">
          <a href="#">
            <figure
              class="image is-2by1 work-item"
              style="background-image: url('https://picsum.photos/320/180?image=70');"
            ></figure>
          </a>
        </div>
      </div>
    </div>
  </div>

  --}}
 

  
  


  <!-- Contact -->
  @if (Route::has('login')) 
            @auth  
  <section class="section" id="contact">
    <div class="container">
      <div class="columns">
        <div class="column is-6 is-offset-3">
          <div class="box">
            
    
                <h1 class = "title">Hire an Artist</h1>
                
                <form method="POST" action="/artists/{{ $artist->id}}/orders " class="box">
    
                    {{ csrf_field()}}

                    <div class ="field">
                      <label class="label" for="title">Title</label>
          
                      <div class="control">
                      <input type = "text" name ="title" class="input"  value = "{{ old ('title')}}">
                      </div>
                  </div>

                    <div class ="field">
                        <label class="label" for="date">Date</label>
            
                        <div class="control">
                                <input type = "date" name ="date" placeholder="date" class="input" required value = "{{ old ('date')}}">
                        </div>
                    </div>
    
                    <div class ="field">
                        <label class="label" for="time">Time</label>
            
                        <div class="control">
                                <input type = "time" name ="time" placeholder="time" class="input" required value = "{{ old ('time')}}">
                        </div>
                    </div>
    
    
                    <div class="field"> 
                        <label class="label" for="description">Description</label>
                        <div class="control">
                            <textarea name = "description" placeholder="Event Description" class="textarea" > {{ old ('description')}} </textarea>
                        </div>
                    </div>
    
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-link"> Add Order </button>
                        </div>
                    </div>
    
                </form>
            @endauth
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

  <br>
  <br>
  <br>

  <section class="section" id="services" >
    <div class="section-heading">
    <h3 class="title is-2 center" style="text-align: center"> Artist Artwork</h3>
    <h4 class="subtitle is-5"></h4>
    </div>
    <br>
    <br>


</section>

  <div class="columns body-columns">
    <div class="column is-half is-offset-one-quarter">
      @foreach ( $videos as $videos)
        <div class="card">
            
            <div class="card-image">
              <video width="1280" height="720" controls loop>
                <source src="{{ asset($videos->url) }}" type="video/mp4">
                
              </video>
            </div>
            <div class="card-content">
                <div class="content">
                    {{$videos->descripton}}
                </div>
            </div>
         
        </div>

        <br>

      @endforeach
      

      @foreach ( $images as $images)
        <div class="card">
            
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="{{ asset($images->url) }}" alt="Artist Gallery Image">
                </figure>
            </div>
            <div class="card-content">
                <div class="content">
                    {{$images->descripton}}
                </div>
            </div>
         
        </div>

        <br>

      @endforeach



        



        



        
    </div>
</div>

  @endsection