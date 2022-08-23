<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Myntra - Online Shopping</title>
    <link
      rel="icon"
      href="https://constant.myntassets.com/web/assets/img/icon.5d108c858a0db793700f0be5d3ad1e120a01a500_2021.png"
      type="image/icon type"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <link rel="stylesheet" href="{{asset('homepage-assets/css/home.css')}}" />
    <link rel="stylesheet" href="{{asset('homepage-assets/css/login.css')}}" />
    <link rel="stylesheet" href="{{asset('homepage-assets/css/signup.css')}}" />
    <link rel="stylesheet" href="{{ asset('homepage-assets/css/products.css')}}">
    <link rel="stylesheet" href="{{ asset('homepage-assets/css/moda.css')}}" />
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
            <span class="badge badge-pill cart-count" id="output"></span>
            <a href="">
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

      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="footer-col">
              <h4>online shopping</h4>
              <ul>
                <li><a href="#">men</a></li>
                <li><a href="#">women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Home & living</a></li>
                <li><a href="#">Beauty</a></li>
                <li><a href="#">gift cards</a></li>
                <li>
                  <a href="#">myntra insider <span>New</span> </a>
                </li>
              </ul>
            </div>
            <div class="footer-col">
              <h4>useful links</h4>
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">contact us</a></li>
                <li><a href="#">returns</a></li>
                <li><a href="#">track order</a></li>
                <li><a href="#">Careers</a></li>
              </ul>
            </div>

            <div class="footer-col">
              <h4>experience myntra app on mobile</h4>
              <a href=""
                ><img
                  src="https://constant.myntassets.com/web/assets/img/80cc455a-92d2-4b5c-a038-7da0d92af33f1539674178924-google_play.png"
                  alt=""
              /></a>
              <a href=""
                ><img
                  src="https://constant.myntassets.com/web/assets/img/bc5e11ad-0250-420a-ac71-115a57ca35d51539674178941-apple_store.png"
                  alt=""
              /></a>
              <h4>keep in touch</h4>
              <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
            </div>

            <div class="footer-col">
              <div class="footer-promise">
                <img
                  src="https://constant.myntassets.com/web/assets/img/6c3306ca-1efa-4a27-8769-3b69d16948741574602902452-original.png"
                  alt=""
                />
                <div>
                  <strong>100% ORIGINAL</strong>

                  <span>guarantee for all products at myntra.com</span>
                </div>
              </div>

              <div class="footer-promise">
                <img
                  src="https://constant.myntassets.com/web/assets/img/ef05d6ec-950a-4d01-bbfa-e8e5af80ffe31574602902427-30days.png"
                  alt=""
                />
                <div>
                  <strong>Return within 30days</strong>
                  <span>of receiving your order</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </main>
  </body>
</html>
<script src="{{asset('homepage-assets/js/home.js')}}"></script>
