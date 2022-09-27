<?php
use App\Http\Controllers\ProductController;
$total = 0;
if (Session::has('username')) 
{
  $total=ProductController::cartItem();
}

?>

<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">E-comm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <form class="d-flex" action="/search" method="GET">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="query">
          <button class="btn btn-outline-light text-white" type="submit">Search</button>
        </form>   
        <div class="text-white">
          <ul class="nav navbar-nav navbar-right text-white " >
            <li style="margin: 5px"><a class="text-white" href="/cartlist">Cart({{$total}})</a></li>
            @if(Session::has('username'))
            
            <li class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{Session::get('username')['name']}}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                 
                </ul>
            </li>
            @else 
            <li style="margin: 5px"><a class="text-white"  href="/login">Login</a></li>
            <li style="margin: 5px"><a class="text-white"  href="/registration">Registration</a></li>
            @endif
          </ul>
        </div>
        </ul>    
      </div>
  </div>    
</div>
</nav>