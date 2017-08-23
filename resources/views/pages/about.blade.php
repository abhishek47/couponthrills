@extends('layouts.app')


@section('content')

<!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>about us</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">About</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  
  
  <section class="our-services">
		<div class="container">
			<div class="row first-row">
				<div class="col-sm-6 pull-right screen-img">
					<figure><img src="images/admin-screen.png" class="center-block"></figure>	
				</div>
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
					<figure><img src="images/admin-screen-2.png" class="center-block"></figure>	
				</div>
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
          <a href="#."><img class="img-responsive" src="images/app-icon.png" alt=""></a> <a href="#."><img class="img-responsive" src="images/app-icon-1.png" alt=""></a> </li>
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
        <li> <a href="#."><img class="img-responsive" src="images/clients-1.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="images/clients-2.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="images/clients-3.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="images/clients-4.png" alt=""></a> </li>
        <li> <a href="#."><img class="img-responsive" src="images/clients-5.png" alt=""></a> </li>
      </ul>
    </div>
  </section>
  


@endsection