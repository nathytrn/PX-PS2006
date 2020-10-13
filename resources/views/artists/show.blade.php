@extends('layout')

@section('content')




        <h1 class = "title">------</h1>
        @if (Route::has('login')) 
        @auth  

            <h1 class = "title">Hire an Artist</h1>
            
            <form method="POST" action="/artists/{{ $artist->id}}/orders " class="box">

                {{ csrf_field()}}
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
        

        @if (Route::has('login')) 
        @auth  
        @if (  auth()->check() && auth()->user()->is_admin == 1)

        @if ($artist->orders->count())
        <div>
            @foreach ($artist->orders as $order)
            <div>
                <form method ="POST" action="/orders/{{ $order->id}}">
                @method('PATCH')
                @csrf
                <li> 
                    {{ $order->description}}
                    ------ Current Stage
                    <label for="stage" class="selected">
                        <select name="stage" id="stage" class = "select">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="Created">Created</option>
                            <option value="Waiting for Payment">Waiting for Payment</option>
                            <option value="Payment Received">Payment Received</option>
                            <option value="Artist Confirmed">Artist Confirmed</option>
                            <option value="Closed Failed">Closed Failed</option>
                            <option value="Closed Complete">Closed Complete</option>
                            
                            
                        </select>
                    </label>

                    <div class="field">
                        <button type="submit" class="button is-link"> Update </button>
                    </div>

                </li>
                
                
                </form>
            </div>
              
            @endforeach
        </div>

        <p>
            <a href="/artists/{{ $artist-> id }}/edit">Edit Details</a>
        </p>
        @endif

        @endif
        @endauth 
        @endif
        
        
@endsection