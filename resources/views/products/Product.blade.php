@extends('login/master')
@section('content')
 <div class="container">
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="carousel-item {{$item['id']==1?'active':''}}">
           <a href="/detail/{{$item['id']}}">
            <img class="slide_img" src="{{$item['gallery']}}">
            <div class="carousel-caption slide_text">
              <h3 class="slide_name">{{$item['name']}}</h3>
              <p class="slide_description">{{$item['description']}}</p>
            </div>
           </a>
          </div>    
        @endforeach      
    </div>
    
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
      
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <div class="trending-wraper"> 
    <h3>Trending Product</h3>
    @foreach ($products as $item)
    <div class="trending-item" >
      <a href="/detail/{{$item['id']}}">
        <img class="trending-img" src="{{$item['gallery']}}">
        <div class="trending-name">
          <h3 style="font-size: 12px">{{$item['name']}}</h3>
        </div>
        </a>
      </div>    
    @endforeach  
  </div>
 </div>
@endsection