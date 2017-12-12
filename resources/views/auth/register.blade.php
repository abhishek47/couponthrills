@extends('layouts.app')

@section('content')
<!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Sign Up</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Sign Up</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <!--======= SIGN UP =========-->
  <section class="sign-up">
    <div class="container">
      
      <div class="row">
        <div class="col-sm-6">
          <h4>Get more free coupons and deals<br>
            from CouponsThrills!</h4>
          <img class="img-responsive" src="images/sign-up-img.png" alt="" > </div>
        
        <!--======= SIGN UP FORM =========-->
        <div class="col-sm-6">
            @include('partials.errors')
          <form method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <ul class="row">
              <li class="col-md-6">
                <div class="form-group">
                  <label for="">Full Name *
                    <input type="text" name="name" class="form-control" id="name" placeholder="">
                  </label>
                </div>
              </li>
             
              <li class="col-md-6">
                <div class="form-group">
                  <label for="">E-mail Address *
                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                  </label>
                </div>
              </li>
              <li class="col-md-6">
                <div class="form-group">
                  <label for="">Password
                    <input type="password" name="password" class="form-control" id="password" placeholder="">
                  </label>
                </div>
              </li>

              <li class="col-md-6">
                <div class="form-group">
                  <label for="">Confirm Password
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="">
                  </label>
                </div>
              </li>

              <li class="col-md-6">
                <div class="form-group">
                  <label for="">Referrer Code
                    <input type="text" name="referal_code" class="form-control" id="referal_code" placeholder="REFBY23">
                  </label>
                </div>
              </li>

              <li class="col-md-6">
                <div class="form-group">
                    <input type="hidden" name="" class="form-control" id="" placeholder="REFBY23">
                 
                </div>
              </li>

              <li class="col-md-6">
                <button type="submit" class="btn">create an account</button>
              </li>
            </ul>
          </form>
          <div class="policy">
            <p>By creating an account, you accept our <a href="#.">Privacy Policy </a> and our <a href="#."> Terms and Conditions </a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
 
@endsection
