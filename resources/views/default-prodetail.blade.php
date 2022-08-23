<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Myntra - Online Shopping</title>
    <link
      rel="icon"
      href="https://constant.myntassets.com/web/assets/img/icon.5d108c858a0db793700f0be5d3ad1e120a01a500_2021.png"
      type="image/icon type"
    />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('homepage-assets/css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('homepage-assets/css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('homepage-assets/css/signup.css')}}" />
    <link rel="stylesheet" href="{{ asset('homepage-assets/css/products.css')}}">
    <link rel="stylesheet" href="{{ asset('homepage-assets/css/moda.css')}}" />
    <link rel="stylesheet" href="{{ asset('homepage-assets/css/bag.css')}}">
  </head>
  <body>
    <main>
      <div class="header sticky">
        <div>
          <a href="/"
            ><img
              src="{{asset('logo.png')}}"
              alt="logo"
          /></a>
        </div>
        <div class="categories">
          <ul>
            <li class="dropdown-content1 dropdown-content">
              <a href="mens.html">Men</a>
            </li>
            <li class="dropdown-content2 dropdown-content">
              <a href="">Women</a>
            </li>
            <li class="dropdown-content3 dropdown-content">
              <a href="">Kids</a>
            </li>
            <li class="dropdown-content4 dropdown-content">
              <a href="">Home & Living</a>
            </li>
            <li class="dropdown-content5 dropdown-content">
              <a href="">Beauty</a>
            </li>
          </ul>
        </div>

        <!-- Search Div -->
        <div class="search-div">
          <img
            id="searchpng"
            src="https://image.flaticon.com/icons/png/128/49/49116.png"
            alt=""
          />

          <input
            type="text"
            placeholder="Search for products, brands and more"
          />
        </div>

        <div class="nav-last">
            @if (!Auth::guest())
          <div>
            <a href="{{route('user.dashboard')}}">
              <img id="svg" src="https://www.svgrepo.com/show/198180/user-profile.svg" alt=""/>
            </a>

            <div>Profile</div>
          </div>
          <div>
            <a href="">
              <img id="svg" src="https://www.svgrepo.com/show/14970/heart.svg" alt=""/>
            </a>
            <div>Wishlist</div>
          </div>
          <div>
            <a href="">
                <img id="svg" src="https://www.svgrepo.com/show/107948/login.svg" alt=""/>
            </a>
            <div>
                <a href="{{route('user.logout')}}">Logout</a>
            </div>
          </div>
          @else
          <div>
            <a href="{{route('user.login')}}">
                <img id="svg" src="https://www.svgrepo.com/show/107948/login.svg" alt=""/>
            </a>
            <div>
                <a href="{{route('user.login')}}">Login</a>
            </div>
          </div>
          <div>
            <a href="{{route('user.register')}}">
                <img id="svg" src="https://www.svgrepo.com/show/57971/register.svg" alt=""/>
            </a>
            <div><a href="{{route('user.register')}}">Register</a></div>
          </div>
          @endif
          
          <div>
            <span class="badge badge-pill cart-count" id="output" style="margin-top: -14px"></span>
            <a href="{{route('addToCart')}}">
              <img
                id="svg"
                src="https://www.svgrepo.com/show/17522/bag.svg"
                alt=""
              />
            </a>

            <div>Bag</div>
          </div>
        </div>
      </div>

      <!-- dropdown -->
      <div class="dropdown-menu1 dropdown-menu">
        <ul>
          <li><a href="products.html">Shirts</a></li>
          <li><a href="products.html">Tshirts</a></li>
          <li><a href="products.html">Jeans</a></li>
          <li><a href="products.html">Shoes</a></li>
          <li><a href="products.html">Accessories</a></li>
        </ul>
      </div>

      <div class="dropdown-menu2 dropdown-menu">
        <ul>
          <li><a href="products.html">Ethnic</a></li>
          <li><a href="products.html">western wear</a></li>
          <li><a href="products.html">Footwear</a></li>
          <li><a href="products.html">sports wear</a></li>
          <li><a href="products.html">Accessories</a></li>
        </ul>
      </div>

      <div class="dropdown-menu3 dropdown-menu">
        <ul>
          <li><a href="products.html">Boys Clothing</a></li>
          <li><a href="products.html">Girls Clothing</a></li>
          <li><a href="products.html">infants</a></li>
          <li><a href="products.html">boys footwear</a></li>
          <li><a href="products.html">girls footwear</a></li>
        </ul>
      </div>

      <div class="dropdown-menu4 dropdown-menu">
        <ul>
          <li><a href="products.html">Bed Linen</a></li>
          <li><a href="products.html">Flooring</a></li>
          <li><a href="products.html">bath</a></li>
          <li><a href="products.html">home decor</a></li>
          <li><a href="products.html">kitchen</a></li>
        </ul>
      </div>

      <div class="dropdown-menu5 dropdown-menu">
        <ul>
          <li><a href="products.html">make up</a></li>
          <li><a href="products.html">skincare</a></li>
          <li><a href="products.html">haircare</a></li>
          <li><a href="products.html">fragrances</a></li>
          <li><a href="products.html">mens grooming</a></li>
        </ul>
      </div>

      @yield('content')

      <!-- Footer -->

      
    </main>
  </body>
</html>
<script src="{{asset('homepage-assets/js/home.js')}}"></script>
