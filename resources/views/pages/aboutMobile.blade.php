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


  


<section class="our-services">
    <div class="container">
      <div class="row first-row">
        <div class="col-sm-6 pull-right screen-img">
          <figure><img src="/images/admin-screen.png" class="center-block"></figure> 
        </div>
        <br class="visible-xs">
        <div class="col-sm-5 pull-left">
          <div class="service-info-outer center-block">
            <h3 class="info-title" style="color: #000;">
              Play.Win.Redeem
            </h3>
            <p class="info-description" style="color: #000;">
              Unbold is a fully featured premium admin template built on top of awesome Bootstrap 3.3.7,modern web technology HTML5,CSS3 and jQuery.It has many ready to use hand crafted components.The theme is fully responsive and easy to customize.The code is super easy to understand and gives power to any developer to turn this theme into real web application.  
            </p>
            <a href="#" class="btn" style="background-color: #CF000F">
              Learn More
            </a>
          </div>
        </div>
      </div>

      <div class="row second-row">
        <div class="col-sm-6 pull-left  screen-img">
          <figure><img src="/images/admin-screen-2.png" class="center-block"></figure> 
        </div>
        <br class="visible-xs">
        <div class="col-sm-5 pull-right">
          <div class="service-info-outer center-block">
            <h3 class="info-title" style="color: #000;">
              Find the best one for your need.
            </h3>
            <p class="info-description" style="color: #000;">
              Unbold is a fully featured premium admin template built on top of awesome Bootstrap 3.3.7,modern web technology HTML5,CSS3 and jQuery.It has many ready to use hand crafted components.The theme is fully responsive and easy to customize.The code is super easy to understand and gives power to any developer to turn this theme into real web application.  
            </p>
            <a href="#" class="btn" style="background-color: #CF000F;">
              Learn More
            </a>
          </div>
        </div>
      </div>  
    </div>  
  </section>

  <!--======= COMMUNITY =========-->
  <section class="community">
    <div class="container">
      <ul class="row">
        <li class="col-sm-6 text-center">
          <h4>JOIN THE Stallion's Studios COMMUNITY</h4>
          <a href="#." class="btn">JOIN NOW</a> </li>
        <span class="sizer"></span>
        <li class="col-sm-6 text-center">
          <h4>Download our game DualBowling, to win coins!</h4>
          <a href="#."><img class="img-responsive" src="images/app-icon.png" alt=""></a> <a href="#."><img class="img-responsive" src="/images/app-icon-1.png" alt=""></a> </li>
      </ul>
    </div>
  </section>
  
  <!--======= TEAM =========-->
  <section class="parthner">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>our Partners</h3>
      </div>
      <ul class="row">
        <li> <a href="#."><img class="img-responsive" src="/images/clients-1.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="/images/clients-2.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="/images/clients-3.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="/images/clients-4.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="/images/clients-5.png" alt=""></a> </li>
      </ul>
    </div>
  </section>



  

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

  <script>
    $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
    
    </script>

  @yield('js')

</body>
</html>