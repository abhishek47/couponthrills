<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Multi-Purpose,M_Adnan,Corporate Theme,Comre -   Coupon &amp; Offers Template" >
<meta name="description" content="Coupon &amp; Offers Website">
<meta name="author" content="Trumpets">

<!-- FONTS ONLINE -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

<!--MAIN STYLE-->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/css/main.css" rel="stylesheet" type="text/css">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<link href="/css/animate.css" rel="stylesheet" type="text/css">
<link href="/css/responsive.css" rel="stylesheet" type="text/css">
<link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<div id="wrap">

<!--======= TOP BAR =========-->
  <div class="top-bar">
    <div class="container">
      <ul class="left-bar-side social_icons">
       <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
        <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li>
        
      </ul>
      <ul class="right-bar-side">
            @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li >
                                <a href="/home">
                                    {{ Auth::user()->name }} 
                                </a>

                               
                            </li>
                            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        @endif
      </ul>
    </div>
  </div>
  
  <!--======= HEADER =========-->
  <header>

<!--
    <div class="container"> 
      
      <div class="logo"> <a href="#."><img src="images/logo.png" alt="" ></a> </div>
      
      <div class="search">
        <select class="form-control">
          <option>All Categories</option>
          <option>Exclusive</option>
          <option>Coupon</option>
          <option>Cashback</option>
        </select>
        <input class="form-control" placeholder="Enter your keyword...">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>
    </div>
-->
    <nav>
      <div class="container"> 

      <!--======= MENU START =========-->
        <ul class="ownmenu">
          <li class="{{ isset($page) ? ($page == 'home' ? 'active' : '') : '' }}"><a href="/">Home</a></li>
          <li class="{{ isset($page) ? ($page == 'coupons' ? 'active' : '') : '' }}"><a href="/coupons">Deals</a></li>
          <li class="{{ isset($page) ? ($page == 'stores' ? 'active' : '') : '' }}"><a href="/stores">Stores</a></li>
          <li class="{{ isset($page) ? ($page == 'about' ? 'active' : '') : '' }}"><a href="/about">About us</a></li>
          <li class="{{ isset($page) ? ($page == 'contact' ? 'active' : '') : '' }}"><a href="/contact">Contact</a></li>
        </ul>

      <!--======= SUBMIT COUPON =========-->
      <div class="sub-nav-co"> <a href="http://www.stallionstudio.in">Stallion Studios</a> </div>
      </div>
    </nav>

  </header>


  @yield('content')



  <footer>
    <div class="container">
      <ul class="row">
        <li class="col-sm-4">
          <h6>about couponthrills</h6>
          <p>Hello we are CouponThrills. We are here to provide you the best offers through our coupons. Hello we are 
            CouponThrills. We are here to provide you coupons.</p>
          <p>Nashik, Maharashtra, India</p>
          <p>contact@stallionstudio.in</p>
          <p>http://stallionstudio.in</p>
        </li>
        <li class="col-sm-4">
          <h6>quick link</h6>
          <div class="row links">
            <ul class="col-xs-4">
              <li><a href="#.">Home</a> </li>
              <li><a href="#.">stores</a> </li>
              <li><a href="#.">contact </a> </li>
              <li><a href="#.">careers</a> </li>
              <li><a href="#.">blog</a> </li>
            </ul>
            <ul class="col-xs-8">
              <li><a href="#.">Sitemap</a> </li>
              <li><a href="#.">Press</a> </li>
              <li><a href="#.">Privacy Policy & Opt Out</a> </li>
              <li><a href="#.">List your business on CD</a> </li>
              <li><a href="#.">Terms of Service</a> </li>
            </ul>
          </div>
        </li>
        <li class="col-sm-4">
          <div class="subcribe">
            <h6>Subscribe To Mail!</h6>
            <p>Get our Daily email newsletter with 
              Special Services, Updates, Offers and more!</p>
            <input type="search" class="form-control" placeholder="Email Address">
            <button type="submit">SIGNUP!</button>
          </div>
        </li>
      </ul>
    </div>
    <div class="rights">
      <p>Powered by <a href="http://www.trumpetstechnologies.com" target="_blank">Trumpets.</a>. All rights reserved </p>
      <ul class="social_icons">
        <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
        <li class="twitter"> <a href="#."><i class="fa fa-twitter"></i> </a></li>
        <li class="linkedin"> <a href="#."><i class="fa fa-linkedin"></i> </a></li>
        <li class="tumblr"> <a href="#."><i class="fa fa-tumblr"></i> </a></li>
      </ul>
    </div>
  </footer>


  <script src="/js/jquery-1.11.0.min.js"></script> 
  <script src="/js/wow.min.js"></script> 
  <script src="/js/bootstrap.min.js"></script> 
  <script src="/js/jquery.stellar.js"></script> 
  <script src="/js/jquery.isotope.min.js"></script> 
  <script src="/js/jquery.flexslider-min.js"></script> 
  <script src="/js/owl.carousel.min.js"></script> 
  <script src="/js/jquery.sticky.js"></script> 
  <script src="/js/own-menu.js"></script> 
  <script src="/js/main.js"></script>

  @yield('js')

</body>
</html>