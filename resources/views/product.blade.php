@extends('master')
@section('content')

<div class="slider-pro">
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        
        <div class="carousel-inner">
            @foreach ($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}" data-bs-interval="10000">
                    <img src="{{$item['gallery']}}" class="slider-img" alt="...">
                    <div class="carousel-caption d-none d-md-block slider-text">
                        <h5>{{$item['name']}}</h5>
                        <p>{{$item['description']}}</p>
                    </div>
                    <a href="detail/{{$item['id']}}">Chi tiết</a>
                </div>
            @endforeach
          
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>
      <div class="trending-wapper">
        <h3>Trending Products</h3>
        @foreach ($products as $item)
            <div class="trending-item" >
                <img src="{{$item['gallery']}}" class="trending-img" alt="...">
                <div class="">
                    <h5>{{$item['name']}}</h5>
                    <p>{{$item['description']}}</p>
                </div>
                <a href="detail/{{$item['id']}}">Chi tiết</a>
            </div>
        @endforeach
      </div>
</div>

@endsection