@extends('layouts.app')


@section('content')
 
 	<!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Counpon Thrills</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Home</a></li>
        </ul>
      </div>
    </div>
  </section>


  <!--======= TODAY TOP OFFER =========-->
  <section class="top-offer">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      
      
      <div class="row">
      	<div class="col-md-4">
      	  <div style="margin: 0 auto;width: 128px;"  >
      	  	<img src="/images/gamepad.png" style="width: 128px;" >
      	  </div> 	
      	  <h4 class="text-center" style="margin-top: 15px;font-weight: bold;font-size: 17px;"> Play Games &amp; Win Tokens</h4>
      	  <p class="text-center" style="font-size: 16px;">Play games connected to CouponThrills and earn tokens from them.</p>
      	</div>

      	<div class="col-md-4">
      	   <div style="margin: 0 auto;width: 128px;"  >
      	  	<img src="/images/voucher.png" style="width: 128px;">
      	   </div>
      	    <h4 class="text-center" style="margin-top: 15px;font-weight: bold;font-size: 17px;"> Use Tokens to redeem coupons</h4>
      	    <p class="text-center" style="font-size: 16px;">Tokens earned can be used to redeem different tokens that get you great deals.</p>
      	</div>

      	<div class="col-md-4">
      	 <div style="margin: 0 auto;width: 128px;"  >
      	  	<img src="/images/stores.png" style="width: 128px;">

      	 </div>
      	  <h4 class="text-center" style="margin-top: 15px;font-weight: bold;font-size: 17px;">  Find best websites and apps. </h4>
      	  <p class="text-center" style="font-size: 16px;">We provide you a categorised list of curated websites and apps for the desired purposes.</p>
      	</div>
      </div>

     </div> 
  </section>

    
  <!--======= CLIENTS =========-->
  <section class="our-best">
    <div class="container"> 
      <!--======= TITTLE =========-->
      
      <ul class="row">
        <li>
          <div class="icon"> <img src="images/icon-1.png" alt="" > </div>
          <h6>Use Our <br>
            Gaming tokens</h6>
        </li>
        <li>
          <div class="icon"> <img src="images/icon-2.png" alt="" > </div>
          <h6>exclusive <br>
            coupons</h6>
        </li>
        <li>
          <div class="icon"> <img src="images/icon-3.png" alt="" > </div>
          <h6>1000+ partner <br>
            brands</h6>
        </li>
        <li>
          <div class="icon"> <img src="images/icon-4.png" alt="" > </div>
          <h6>over 1.3 crores <br>
            cashback paid</h6>
        </li>
        <li>
          <div class="icon"> <img src="images/icon-5.png" alt="" > </div>
          <h6>24/7 hours <br>
            support</h6>
        </li>
        <li>
          <div class="icon"> <img src="images/icon-6.png" alt="" > </div>
          <h6>30+ Press <br>
            coverages</h6>
        </li>
        <li>
          <div class="icon"> <img src="images/icon-7.png" alt="" > </div>
          <h6>2000+ happy <br>
            customers</h6>
        </li>
      </ul>
    </div>
  </section>


  

 
  <!--======= TODAY TOP OFFER =========-->
  <section class="top-offer">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>today’s top offers</h3>
      </div>
      <div class="today-top"> 

      @foreach($coupons as $coupon)
        
        <!--======= COUPON 1 =========-->
        <div class="offer-in"> <!-- <img class="img-responsive" src="/images/t-img-1.jpg" alt="" > -->
          <h2 style="color: green;">{{ $coupon->store_name }}</h2>
          <div class="offer-top-in">
            <h6>{{ substr($coupon->title, 0, 50)  }}...</h6>
            <p class="text-uppercase">Expires: {{ $coupon->validity }} </p>
            <div class="btm-offer">
              <p class="text-uppercase"> + up to <span>{{ $coupon->discount }}</span></p>
            </div>
          </div>
          
          <!--======= COUPON HOVER =========-->
          <div class="off-over">
            <h6>{{ substr($coupon->title, 0, 50)  }}...</h6>
            <p class="text-uppercase">Expires: {{ $coupon->validity }} </p>
            <a href="" data-toggle="modal" data-target="#buyCoupon-{{$coupon->id}}" class="btn">get coupon code ( <i class="fa fa-certificate"></i> {{ $coupon->tokens }} )</a>
            <div class="btm-offer">
              <p class="text-uppercase"> + up to <span>{{ $coupon->discount }}</span> </p>
            </div>
          </div>
        </div>

       
        
        @endforeach
        
      </div>
    </div>
  </section>
 

 
  
  <!--======= APP =========-->
  <section class="app-com">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center"> <img class="img-responsive" src="images/iphone.png" alt=""> </div>
        <div class="col-sm-6">
          <div class="text-sec">
            <h3>CouponThrills on app, too!</h3>
            <p>Save the most every time! get deal notifications with our popular Browser App and save on the go with our awesome Mobile App! it’s Available on the App store
              and Google Play. Use it Everywhere!</p>
            <a href="#."><img src="images/app-icon.png" alt=""></a> <a href="#."><img src="images/app-icon-1.png" alt=""></a> </div>
        </div>
      </div>
    </div>
  </section>
  
  <!--======= CLIENTS REVIEW =========-->
  
  <section class="clients">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>Our Customers Words</h3>
      </div>
      <ul class="row">
        
        <!--======= CLIENTS WORD =========-->
        <li class="col-md-4">
          <div class="clients-in">
            <p>On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street they're creepy.</p>
          </div>
          <div class="clients-detail">
            <div class="avatar"> <img src="images/avatar-1.jpg" alt="" >
              <h6>steaven</h6>
              <p>Graphic Designer</p>
            </div>
          </div>
        </li>
        
        <!--======= CLIENTS WORD =========-->
        <li class="col-md-4">
          <div class="clients-in">
            <p>On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street they're creepy.</p>
          </div>
          <div class="clients-detail">
            <div class="avatar"> <img src="images/avatar-2.jpg" alt="" >
              <h6>steaven</h6>
              <p>Graphic Designer</p>
            </div>
          </div>
        </li>
        
        <!--======= CLIENTS WORD =========-->
        <li class="col-md-4">
          <div class="clients-in">
            <p>On my way to where the air is sweet. Can you tell me how to get how to get to Sesame Street they're creepy.</p>
          </div>
          <div class="clients-detail">
            <div class="avatar"> <img src="images/avatar-3.jpg" alt="" >
              <h6>steaven</h6>
              <p>Graphic Designer</p>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>



  @foreach($coupons as $coupon)

  	 <!-- Modal -->
		<div class="modal fade" id="buyCoupon-{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">{{ $coupon->title }}</h4>
		      </div>
		      <div class="modal-body">
		        <h4><b>{{ $coupon->discount }}</b> | <i class="fa fa-certificate"></i> {{ $coupon->tokens }} Tokens</h4>
		        {{ $coupon->description }}
		        <hr>
		        <b>Store : </b> {{ $coupon->store_name }}
		        <b>Expires : </b> {{ $coupon->validity }} 
						        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
		        <button type="button" class="btn btn-primary" style="background-color: #002b5e;color: #fff;">Redeem Tokens</button>
		      </div>
		    </div>
		  </div>
		</div>

@endforeach		

@endsection