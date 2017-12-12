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


  @if(auth()->check())
<section class="" style="padding-top: 30px;">
    <div class="container"> 
     <div class="panel panel-default">
                <div class="panel-heading">
                    
                </div>
                <div class="panel-body">
                    <div class="col-md-9">
                    <h3>{{ auth()->user()->name }}</h3>
                    <p>{{ auth()->user()->email }}</p>
                    </div>
                    <div class="col-md-3"> 
                    <h4 class="text-center">Tokens : {{ auth()->user()->tokens }}</h4>
                    <button data-toggle="modal" data-target="#buytokens" class="btn btn-default" style="margin-top: 10px;width: 100%;">Buy Tokens</button>
                    </div>
                </div>
            </div>
          </div>
        </section>    
   @endif         

  @if(!auth()->check())
  <!--======= TODAY TOP OFFER =========-->
  <section class="top-offer " >
    <div class="container"> 
      
      
      
      <div class="row">
        <div class="col-md-4">
          <div style="margin: 0 auto;width: 128px;"  >
            <img src="/images/gamepad.png" style="width: 128px;" >
          </div>  
          <h4 class="text-center" style="margin-top: 15px;font-weight: bold;font-size: 17px;"> Play Games &amp; Win Tokens</h4>
          <p class="text-center" style="font-size: 16px;">Visit our Earn section to play and earn tokes through small surveys, games, referals and more.</p>
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
          <h4 class="text-center" style="margin-top: 15px;font-weight: bold;font-size: 17px;">  Shop and Browse by categories </h4>
          <p class="text-center" style="font-size: 16px;">We provide you a categorised list of curated websites and apps for the desired purposes.</p>
        </div>
      </div>

     </div> 
  </section>

@endif

<section class="featured by-cate" style="padding-top: 0;">
    <div class="container"> 
      <!--======= TITTLE =========-->
      
      <div class="row"> 
        
        <!--======= CATEGORIES ROW=========-->
        <div class="col-md-6">
          <ul class="row">
            
            <!--======= CATEGORIES =========-->
            <li class="col-sm-6">
              <div class="cate-in">
                <div class="cate"> <img src="/images/cgames.jpg" alt="">
                  <div class="cate-over"> 
                    <div class="after-over animated flipInY">
                      <p>Tic-Tac-Toe</p>
                      <a href="/games/tic-tac-toe">PLAY NOW</a> </div>
                  </div>
                  <!--======= TITTLE =========-->
                  <div class="cate-tittle"> Play Games </div>
                </div>
              </div>
            </li>
            
            <!--======= CATEGORIES =========-->
            <li class="col-sm-6">
              <div class="cate-in">
                <div class="cate"> <img src="/images/puzzles.jpg" alt="">
                  <div class="cate-over">
                    <div class="after-over animated flipInY">
                      <p>General Knowledge</p>
                      <a href="/quiz">PLAY NOW</a> </div>
                  </div>
                  <!--======= TITTLE =========-->
                  <div class="cate-tittle"> Quizzes &amp; Puzzles </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
        <!--======= CATEGORIES ROW=========-->
        <div class="col-md-6">
          <ul class="row">
            
            <!--======= CATEGORIES =========-->
            <li class="col-sm-6">
              <div class="cate-in">
                <div class="cate"> <img src="/images/referals.jpg" alt="">
                  <div class="cate-over">
                    <div class="after-over animated flipInY">
                      <p>Refer &amp; Earn</p>
                      <a href="#" data-toggle="modal" data-target="#referFriend">REFER NOW</a> </div>
                  </div>
                  <!--======= TITTLE =========-->
                  <div class="cate-tittle"> Referals </div>
                </div>
              </div>
            </li>
            
            <!--======= CATEGORIES =========-->
            <li class="col-sm-6">
              <div class="cate-in">
                <div class="cate"> <img src="/images/bonuses.jpg" alt="">
                  <div class="cate-over"> 
                    <div class="after-over animated flipInY">
                      <p>Get Bonus Tokens</p>
                      <a href="/games/spinner">SPIN NOW</a> </div>
                  </div>
                  <!--======= TITTLE =========-->
                  <div class="cate-tittle"> spin wheel </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
       
        
        
          
        </div>
      
    <!-- <a href="/earn" class="btn btn-large" style="margin: 0 auto;display: block;width: 220px;">VIEW MORE</a> -->

    </div>

  </section>




 
  <!--======= TODAY TOP OFFER =========-->
  <section class="top-offer" style="padding-top: 5px;">
    <div class="container"> 
      
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>today’s top offers</h3>
      </div>
      <div class="today-top"> 

      @foreach($coupons as $coupon)
        
        <!--======= COUPON 1 =========-->
        <div class="offer-in"> <!-- <img class="img-responsive" src="/images/t-img-1.jpg" alt="" > -->
         
          <div class="offer-top-in">
            <img class="img-responsive" style="width: 100px;" src="{{ $coupon->logo_path }}">
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


  

    
  <!--======= CLIENTS =========-->
  <section class="our-best hidden-xs" style="padding-bottom: 120px;">
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




  

 

 
  
  <!--======= APP =========
  <section class="app-com">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center"> <img class="img-responsive" src="images/iphone.png" alt=""> </div>
        <div class="col-sm-6">
          <div class="text-sec">
            <h3>CouponThrills on app, too!</h3>
            <p>Save the most every time! get deal notifications with our popular Browser App and save on the go with our awesome Mobile App! it’s Available on the App store
              and Google Play. Use it Everywhere!</p>
           <a href="#."><img src="images/app-icon-1.png" alt=""></a> </div>
        </div>
      </div>
    </div>
  </section>
  -->
  

@if(request()->session()->has('coupon_redeemed'))
		<div class="modal fade" id="redeem" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		       <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">{{ session('coupon_redeemed')->title }}</h4>
		      </div>
		      <div class="modal-body">
		         <h5><b>{{ session('coupon_redeemed')->tokens }}</b> tokens redeemed.You have <b>{{ auth()->user()->tokens }}</b> tokens left.</h5>
		         <b>Coupon Code :</b> 
		         @if(!empty(session('coupon_redeemed')->code )) 
		         <input type="text" class="form-control" value="{{ session('coupon_redeemed')->code }}" name="" readonly="">
		         @else
		         <input type="text" class="form-control" value="Click on Use Offer!" name="" readonly="">
		         @endif
		         <small class="text-muted">This offer has been saved to your account!You can either use this coupon now or later uptil the expiration!</small>

		         <hr>
		         <b>Store : </b> {{ session('coupon_redeemed')->store_name }}
		         <b>Expires : </b> {{ session('coupon_redeemed')->validity }} 

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
		         <a type="button" target="_blank" href="{{ session('coupon_redeemed')->link }}" class="btn btn-primary" style="background-color: #002b5e;color: #fff;">Use Offer</a>
		      </div>
		    </div>
		  </div>
		</div>
	@endif	



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
		       <a type="button" href="/coupons/{{$coupon->id}}/redeem/" class="btn btn-primary" style="background-color: #002b5e;color: #fff;">Redeem <b>{{ $coupon->tokens }}</b> Tokens &amp; Get Code</a>
		      </div>
		    </div>
		  </div>
		</div>

@endforeach		



@if(auth()->check())

<div class="modal fade" id="buytokens" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Buy tokens</h4>
        <form method="post" action="/buy/tokens">
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        <b>Choose number of tokens you want to buy.</b>
        <br><br> 
        <div class="btn-group" data-toggle="buttons">
          <label class="btn btn-default active rbtn">
            <input type="radio"  name="tokens" id="option1" value="50" autocomplete="off" checked><i class="fa fa-money" style="color: green;"></i> 50 tokens ( &#8377 100 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio"  name="tokens" id="option2" value="100" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  100 tokens ( &#8377 200 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio" name="tokens" id="option3" value="300" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  300 tokens ( &#8377 600 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio"  name="tokens" id="option4" value="500" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  500 tokens ( &#8377 1000 )
          </label>
          <label class="btn btn-default rbtn">
            <input type="radio"  name="tokens" id="option5" value="1000" autocomplete="off"><i class="fa fa-money" style="color: green;"></i>  1000 tokens ( &#8377 2000 )
          </label>
        </div>
        <br>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Make Payment</button>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="referFriend" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Refer &amp; Earn</h4>
        <form method="post" action="/refer">
      </div>
      <div class="modal-body">
        {{ csrf_field() }}
        <b>Enter E-mail address of your friend to invite! Seperate multiple emails using comma(',') to send invite to multiple people. When the refered users join CouponThrills using your referal code, you earn 50 tokens each!</b>

        <br><br> 
        <div class="form-group">
          <input type="text" name="emails" class="form-control" placeholder="xyz@example.com,abc@example.com">
        </div>

        <b>Your Referal Code : </b>
        <input type="text" class="form-control" value="REFBY{{auth()->id()}}" name="" readonly="">
          
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn" style="background:#002b5e;">Send Invite</button>
        </form>
      </div>
    </div>
  </div>
</div>


@endif



@endsection


@section('js')

	@if(request()->session()->has('coupon_redeemed'))
	 <script type="text/javascript">
		$('#redeem').modal()
	 </script>
	@endif 



@endsection