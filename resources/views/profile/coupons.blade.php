@extends('layouts.app')

@section('content')
 <!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>My Coupons</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">My Coupons</a></li>
        </ul>
      </div>
    </div>
  </section>
  
<section class="top-offer">
<div class="container">
   @include('flash::message')
    <div class="row">
         <div class="col-md-3">
             @include('partials.profile_nav')
         </div>
        <div class="col-md-9">

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
                  <a href="" data-toggle="modal" data-target="#redeem-{{$coupon->id}}" class="btn">View Coupon Code</a>
                  <div class="btm-offer">
                    <p class="text-uppercase"> + up to <span>{{ $coupon->discount }}</span> </p>
                  </div>
                </div>
              </div>

              <div class="modal fade" id="redeem-{{$coupon->id}}" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                     <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="myModalLabel">{{ $coupon->title }}</h4>
                    </div>
                    <div class="modal-body">
                      
                       <b>Coupon Code :</b> 
                       @if(!empty($coupon->code )) 
                       <input type="text" class="form-control" value="{{ $coupon->code }}" name="" readonly="">
                       @else
                       <input type="text" class="form-control" value="Click on Use Offer!" name="" readonly="">
                       @endif

                       <hr>
                       <b>Store : </b> {{ $coupon->store_name }}
                       <b>Expires : </b> {{ $coupon->validity }} 

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
                       <a type="button" target="_blank" href="{{ $coupon->link }}" class="btn btn-primary" style="background-color: #002b5e;color: #fff;">Use Offer</a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach  
            
        </div>
    </div>
</div>
</section>

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
@endsection
