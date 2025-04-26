<?php
use App\Http\Controllers\ProductController;
$total = 0;
if(Session::has('user'))
{
$total= ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">E-Commerce</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Orders</a>
        </li>
        <!-- Search bar goes here -->
        <li class="nav-item">
          <form action="/search" class="d-flex ms-3" role="search">
            <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>
      </ul>
      <!-- Add to Cart on far right -->
                <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Cart({{$total}})</a>
            </li> 
            @if(Session::has('user'))
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{Session::get('user')['name']}}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
      </li>
      @else
      <a class="nav-link" href="/login">Login</a>
      @endif
          </ul>
    </div>
  </div>
</nav>
