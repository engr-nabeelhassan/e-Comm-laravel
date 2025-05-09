@extends('master')
@section('content')
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <!-- Slides -->
  <div class="carousel-inner">
    @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
      <img class="slider-img" src="{{$item['gallery']}}" class="d-block w-100" alt="Los Angeles">
      <div class="carousel-caption d-none d-md-block slider-text">
        <h5>{{ $item['name'] }}</h5>
        <p>{{ $item['description'] }}</p>
      </div>
      </a>
    </div>
    @endforeach
  </div>

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-wrapper">
<h1>Trending Products</h1>
    @foreach ($products as $item)
    <div class="">
        <div class="trending-item">
          <a href="detail/{{$item['id']}}">
            <img class="trending-img" src="{{ $item['gallery'] }}">
            <div class="">
            <h5>{{ $item['name'] }}</h5>
          </div>
         </a>
        </div>
    </div>
    @endforeach
    </div>
</div>
@endsection 