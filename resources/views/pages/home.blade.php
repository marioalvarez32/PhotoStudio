@extends('app')

@section('styles')

<link href="{{ asset('css/home.css') }}" rel="stylesheet" type="text/css">
<style>
    #map {
        height: 400px;  /* The height is 400 pixels */
        /* The width is the width of the web page */
    }
    .footer{
        height:350px;
        background-image:url(../images/nav.png);
        text-align:center;
    }
</style>

@stop
@section('nav-home')

<div class="wrapper">
    <div class="video-container">
        <img id="background" alt="Home Background Gradient" src="images/background-sm.png ">
        <video poster="images/header.mp4" id="bgvid" playsinline autoplay muted loop>
            <!--<source src="{{asset('images/header.mp4')}}" type="video/webm">-->
            <source src="{{asset('images/header.mp4')}}" type="video/mp4">
        </video>
        <img id="logo" alt="Photo Studio Logo" src="images/logo.svg">
    </div>
</div>
@stop
@section('content')
<div class="row category" id="ct-1">
    <div class="pad">
        
    </div>
    <div class="category-text">
        <h1>Weddings</h1>
    </div>
    <div class="category-button">
        <a href="{{ url('weddings') }}" class="button" >See </a>
    </div>


</div>
</div>
<div class="row category" id="ct-2">
    <div class="pad">
        
    </div>
    <div class="category-text">
        <h1>Quinceaneras</h1>
        
    </div>
    <div class="category-button">
        <a href="{{ url('quinceaneras') }}" class="button" >See </a>
    </div>
</div>
<div class="row category" id="ct-3">
    <div class="pad">
        
    </div>
    <div class="category-text">
        <h1>Graduations</h1>
        
    </div>
    <div class="category-button">
        <a href="{{ url('graduations') }}" class="button" >See </a>
    </div>
</div>
<div class="row category" id="ct-4">
    <div class="pad">
        
    </div>
    <div class="category-text">
        <h1>Portraits</h1>
    </div>
    <div class="category-button">
        <a href="{{ url('portraits') }}" class="button" >See </a>
    </div>
</div>
<div class="row category" id="ct-5">
    <div class="pad">
        
    </div>
    <div class="category-text">
        <h1>Information</h1>
    </div>
    <div class="category-button">
        <a href="{{ url('about') }}" class="button" >See </a>
    </div>
    
</div>
<!--The div element for the map -->
<div id="map"></div>
<div class="footer">
    <div class="pure-g footer-container" >
        <div class="pure-u-1-3">
            <h2>Dirección:</h2>
            <p>Constitución 117, Centro, 99250<br>Valparaíso, Zac., Mexico</p>
            </div>
        <div class="pure-u-1-3"><p>Thirds</p></div>
        <div class="pure-u-1-3"><p>Thirds</p></div>
    </div>
</div>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 22.7715448, lng: -103.5670235};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 18, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhfFrWecaY9DfmJ_EpeVcyIYxJUvDRyqE&callback=initMap">
    </script>
@stop

