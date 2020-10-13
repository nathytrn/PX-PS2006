@extends('layout')

@section('content')
    <style>
        body{
            background-blend-mode: color;background-color: rgba(255,255,255,0.8) !important;
  background-image: url("https://www.pngkey.com/png/detail/97-977640_flourish-1-flower-patterns.png"); 
        }
    </style>

    <div class="hero">
        <div> 
            <div class="mySlides">
                <figure class="image">
                    <img src="https://i.imgur.com/4uSVdVM.jpg">
                </figure>
            </div>

            <div class="mySlides">
                <figure class="image">
                    <img src="https://i.imgur.com/fOM95dT.jpg">
                </figure>
            </div>

            <div class="mySlides">
                <figure class="image">
                    <img src="https://i.imgur.com/mBYkbUS.jpg">
                </figure>
            </div>
        </div>
        
    </div>

    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
      </div>

    <script>
        var slideIndex = 0;
        showSlides();
        
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 3500); // Change image every 3.5s
        }
    </script>

    
    <style>
        .styleIntro{

            background-color: rgba(255,255,255,0.3) !important;
            
            background-blend-mode: color;
            background-image: none;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        
        }

        .imageContainer {

       width:200px; 
       height:200px; 
       background-image: url('https://gallerygondwana.com.au/uploads/images/GGFJ/_1200x630_crop_center-center_70/Welcome-to-Gallery-Gondwana-Fiji.jpg');
 }
    </style>

    <div class="section styleIntro" style="padding: 100px 0;">
        <div class="container">
            <div
                class="columns is-multiline"
                data-aos="fade-in"
                data-aos-easing="linear"
            >
                    <div class="column is-12 about-me">
                        <div>
                            <h1 class="title has-text-centered section-title bigTitle">
                                <p style="color:black">Creative Industries Directory Fiji </p>
                            </h1>
                        </div>

                    </div>
            </div>
        </div>
        
    </div>


    <section class="section styleIntro" style="background-image: url('https://advantage-intl.com/wp-content/uploads/2019/04/Fijian-Dance-Hero-Shot.jpg')"  >
        <div class="container has-text-centered">
            <h1 class="title" style="color: white">Featured Artists</h1>
            <p></p>
                
            <div class="columns is-centered" style="padding: 2rem">
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <img src="https://images.pexels.com/photos/167635/pexels-photo-167635.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">John Smith</p>
                                    <p class="subtitle is-6">@johnsmith</p>
                                </div>
                            </div>

                            <div class="content">
                                To be updated
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <img src="https://images.pexels.com/photos/167635/pexels-photo-167635.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">John Smith</p>
                                    <p class="subtitle is-6">@johnsmith</p>
                                </div>
                            </div>

                            <div class="content">
                                To be updated
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image is-2by1">
                                <img src="https://images.pexels.com/photos/167635/pexels-photo-167635.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">John Smith</p>
                                    <p class="subtitle is-6">@johnsmith</p>
                                </div>
                            </div>

                            <div class="content">
                                To be updated
                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
    </section>



    <style>
.center {
  padding: 100px 0;
  /*border: 3px solid green;*/
  text-align: center;
}
</style>
    <div class="center">
        <h2 class="title">Events</h2>
      </div>

    <section class="section styleIntro" style="background-image: url('https://lmwi3dfcr03a91a81vq6o81s-wpengine.netdna-ssl.com/wp-content/uploads/2019/05/Malamala_cokeparty_sept2018_hires_199_of_200_.jpg')">
        <div class="container has-text-centered">
            <div class="tile is-ancestor" >
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
                
                <div class="tile is-parent">
                    <article class="tile is-child ">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                        
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child ">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child ">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
            </div>

            <div class="tile is-ancestor">
                
                <div class="tile is-parent">
                    <article class="tile is-child ">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child ">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <figure class="image">
                            <img src="https://images.pexels.com/photos/374710/pexels-photo-374710.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
                        </figure>
                        <p class="title" style="color: white ">Spring Event</p>
                        <p class="subtitle" style="color: white ">To be updated</p>
                    </article>
                </div>
            </div>
        </div>
    </section>


@endsection
