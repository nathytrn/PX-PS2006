@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Orders Tracking</div>
                <div class="card-body">
                    
                    <div>

                        
                        @foreach ( $requests as $requests)
                        <div>
                            <li>  Client: {{ $requests->user->name}} 
                                <p>-- Order Description : {{ $requests->description}} </p>
                                <p>-- Current stage : {{ $requests ->stage}} </p>
                                <p>-- Artist Name:{{$requests->artist->firstName}} {{$requests->artist->lastName}} </p>
                                
                                <form method ="POST" action="/orders/{{ $requests->id}}">
                                    @method('PATCH')
                                    @csrf                                   
                                        <label for="stage" class="selected">
                                            <select name="stage" id="stage" class = "select">
                                                <option selected value = "{{ $requests ->stage}}"> {{ $requests ->stage}}</option>                                       
                                                <option value="Artist Confirmed">Artist Confirmed</option>
                                                <option value="Waiting for Payment">Waiting for Payment</option>
                                                <option value="Payment Received">Payment Received</option>                                                       
                                            </select>
                                        </label>

                                        <div class="field"> 
                                            <label class="label" for="note">Note</label>
                                            <div class="control">
                                                <textarea name = "note" class="textarea" > {{ $requests ->note}} </textarea>
                                            </div>
                                        </div>
                    
                                        <div class="field">
                                            <button type="submit" class="button is-link"> Update </button>
                                        </div>
                    
                                    
                                    
                                    
                                </form> 
                            </li>
                            
                        </div>
                        
                        @endforeach
                        
                    </div>
    
                    
                </div>


            
            </div>
        </div>
    </div>
</div>

@endsection