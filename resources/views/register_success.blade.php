@extends('master')
@section('content');

  

        <div class="jumbotron">
            <h3>Welcome, {{ Session::get('name') }}</h3>
            <div>Thanks for being part of Boutique.hub.com.</div> 
            <div><a href="/customer-login">Login</a> to start adding items to your cart and also start placing orders.</div> 
        </div>
   
  <div id="scrollTop"><i class="fa fa-long-arrow-up"></i></div>
@stop
@section('title')
          landing Page 
@stop
