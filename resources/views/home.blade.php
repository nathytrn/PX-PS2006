


@extends('layout')

@section('content')
<style>
   
</style>
<div class="container">
    <div class="columns">
        <div class="column is-3 ">
            <aside class="menu is-hidden-mobile">
                <p class="menu-label">
                    General
                </p>
                <ul class="menu-list">
                    <li><a class="is-active">Dashboard</a></li>
                    <li><a>Customers</a></li>
                    <li><a>Other</a></li>
                </ul>
                
                <ul class="menu-list">
                    
                    <li><a>Payments</a></li>
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
                    
                    <li><a href="../">Examples</a></li>
                    <li class="is-active"><a href="#" aria-current="page">User</a></li>
                </ul>
            </nav>
            <section class="hero is-info welcome is-small">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="title">
                            Hello
                        </h1>
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
                            <p class="card-header-title">
                             Your Order
                            </p>
                            
                        </header>
                        <div class="card-table">
                            <div class="content">
                               
                                <table class="table is-fullwidth is-striped">
                                    <tbody>
                                        <tr>
                                            <td>Title</td>
                                            <td>Artist</td>
                                            <td>Description</td>
                                            <td>Stage</td>
                                            <td>Action</td>
                                            
                                        </tr>

                                        @foreach (auth()->user()->orders as $order)

                                        <tr>
                                            <td>{{ $order->title}}</td>
                                            <td>{{ $order->artist->firstName}} {{ $order->artist->lastName}}</td>
                                            <td>{{ $order->description}}</td>
                                            <td>{{ $order->stage}}</td>
                                            <td></td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>

            
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>    
@endsection