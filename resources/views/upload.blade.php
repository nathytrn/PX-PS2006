@extends('layout')

@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
                            <p class="card-header-title" >
                             Upload Image                                              
                            </p>

                            
                                
                            
                        </header>
                        <div class="card-table">
                            <div class="content">

                                <form method="POST" enctype="multipart/form-data" id="upload_image_form" action="javascript:void(0)" >
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-2">
                                            <img id="image_preview_container" src="{{ asset('/storage/image-preview.png') }}"
                                                alt="preview image" style="max-height: 150px;">
                                        </div>  

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" name="image" placeholder="Choose image" id="image">
                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="description">Image Description</label>

                                                <div class="control">
                                                <input type = "text" name ="description"  class="input">
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            select {
                                               
                                                    background: #4e5dff;
                                                    color: #fff;
                                                    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                                            }
                                            select option {
                                                    margin: 40px;
                                                    background:#7676ff;
                                                    color: #fff;
                                                    text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
                                                }
                                        </style>
                                        <div class="col-md-12">
                                            <label for="type" class="label">Image type</label>

                                            <select name="type" id="type" class = "select">
                                                <option value="Image Gallery">Image Gallery</option>
                                                <option value="Avatar">Avatar</option>
                                                
                                            </select>
                                         </div>  


                                        <br>
                                          
                                          
                                        <div class="col-md-12">
                                            <button type="submit" class="button is-primary">Submit</button>
                                        </div>

                                        @if ($errors->any())
                                        <div class="notification is-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error) 
                                                    <li>{{$error}}</li>
                                                    
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </div>     
                                </form>
                            </div>
                        </div>      
                    </div>

                    <br>
                    

                    <div class="card events-card">
                        <header class="card-header">
                            <p class="card-header-title" >
                             Upload Video (Max: 50MB)                                            
                            </p>

                            
                                
                            
                        </header>
                        <div class="card-table">
                            <div class="content">

                                <form method="POST" enctype="multipart/form-data" action="/artist/uploadVideo" >
                                    @csrf
                                    <div class="row">
                                        

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="file" name="video" placeholder="Choose Video" >
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="description">Video Description</label>

                                                <div class="control">
                                                    <input type = "text" name ="description"  class="input">
                                                </div>
                                            </div>
                                        </div>
                                       
                                         

                                        <br>
                                          
                                          
                                        <div class="col-md-12">
                                            <button type="submit" class="button is-primary">Submit</button>
                                        </div>

                                        @if ($errors->any())
                                        <div class="notification is-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error) 
                                                    <li>{{$error}}</li>
                                                    
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </div>     
                                </form>
                            </div>
                        </div>      
                    </div>
                </div>      
            </div>

            <script>
                $(document).ready(function (e) {
           
           $.ajaxSetup({
               headers: {
                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
           });
          
           $('#image').change(function(){
                   
            let reader = new FileReader();
        
            reader.onload = (e) => { 
        
              $('#image_preview_container').attr('src', e.target.result); 
            }
        
            reader.readAsDataURL(this.files[0]); 
          
           });
          
           $('#upload_image_form').submit(function(e) {
        
             e.preventDefault();
          
             var formData = new FormData(this);
          
             $.ajax({
                type:'POST',
                url: "{{ url('artist/upload')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                   this.reset();
                   alert('Image has been uploaded successfully');
                },
                error: function(data){
                   console.log(data);
                 }
               });
           });
        });
            </script>


            

    


@endsection