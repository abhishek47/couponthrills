@extends('layouts.app')


@section('content')

	 <!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>find exclusive coupons</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">find coupons</a></li>
        </ul>
      </div>
    </div>
  </section>

  <div class="container"> 
  	@include('flash::message')
  </div>
  
    <section id="portfolio">
    <div class="portfolio portfolio-filter"> 
      
      <!--======= PORTFOLIO ITEMS =========-->
      <div class="portfolio-wrapper">
        <div class="container"> 
          
          <!--======= PORTFOLIO FILTER =========-->
          <ul class="filter">
            <li><a class="active" href="#." data-filter="*">All  offers</a></li>
            <li><a href="#" data-filter=".free">free shipping</a></li>
            <li><a href="#" data-filter=".store">store wide</a></li>
            <li><a href="#" data-filter=".hot">hot deals</a></li>
            <li><a href="#" data-filter=".best">best seller</a></li>
            <li class="pull-right">
              <select>
                <option value="Category Name">view category</option>
                <option value="Category Name">Category Name</option>
                <option value="Category Name">Category Name</option>
                <option value="Category Name">view category</option>
                <option value="Category Name">Category Name</option>
                <option value="Category Name">Category Name</option>
              </select>
            </li>
          </ul>

         </div>
      </div>
      </div>
      </section> 

  <!--======= BANNER =========-->
  <section class="great-deals">
    <div class="container"> 
      <div class="coupon">

        @foreach($coupons->chunk(3) as $couponsset)
        <ul class="row">
          
          @foreach($couponsset as $coupon) 
	          <!--======= COUPEN DEALS =========-->
	          <li class="col-sm-4">
	            <div class="coupon-inner">
	              <div class="top-tag"> <span class="ribn-pur"><span>{{ substr($coupon->store_name, 0, 10) }}</span></span> <span class="star" style="color: green;">{{ $coupon->discount }}</span> </div>
	              <div class="c-img"> 
	               <!-- <img class="img-responsive" src="images/c-img-1.jpg" alt="" > -->
	                <a class="head" href="#.">{{ $coupon->title }}</a>
	                <p>Experies On : {{ $coupon->validity }}</p>
	                <div class="text-center"> <a  href="" data-toggle="modal" data-target="#buyCoupon-{{$coupon->id}}" class="btn">get coupon code ( <i class="fa fa-certificate"></i> {{ $coupon->tokens }} )</a> </div>
	              </div>
	             
	            </div>
	          </li>
         @endforeach 
          
        </ul>

        @endforeach
        
        <!--======= PAGINATION =========-->
         {{ $coupons->links() }}
      </div>
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
		        <a type="button" href="/coupons/{{$coupon->id}}/redeem/" class="btn btn-primary" style="background-color: #002b5e;color: #fff;">Redeem <b>{{ $coupon->tokens }}</b> Tokens &amp; Get Code</a>
		      </div>
		    </div>
		  </div>
		</div>


@endforeach

	
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


@endsection


@section('js')
	
	@if(request()->session()->has('coupon_redeemed'))
	 <script type="text/javascript">
		$('#redeem').modal()
	 </script>
	@endif 

@endsection