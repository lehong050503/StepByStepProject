<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user')){
  $total = ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Green</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Shop
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tree1</a></li>
              <li><a class="dropdown-item" href="#">Tree2</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Tree3</a></li>
              <li><a class="dropdown-item" href="#">Tree4</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/login">Login</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="/myOrder">Order</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link">Contact us</a>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        
          
        <ul class="navbar-nav" style="margin-right:50px">
          
          <a class="navbar-brand" href="/cartlist" style="margin-left:30px">Cart({{$total}})</a>
          @if (Session::has('user'))
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/logout">Log Out</a></li>
            </ul>
          </li>
          @else
          
            <li><a class="navbar-brand" href="/login">Log In</a></li>
            <li><a class="navbar-brand" href="/register">Register</a></li>
            
          @endif
        </ul>

        
      </div>
    </div>
  </nav>