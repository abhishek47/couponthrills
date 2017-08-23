@extends('layouts.app')

@section('content')
<!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Sign in</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Sign In</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <!--======= SIGN UP =========-->
  <section class="sign-up">
    <div class="container">
      <div class="row">
            
        <!--======= SIGN UP FORM =========-->
        <div class="col-sm-offset-3 col-sm-6">
          @include('partials.errors')
          <form method="POST" action="{{ route('login') }}">
           {{ csrf_field() }}
            <ul class="row">
              <li class="col-md-12">
                <div class="form-group">
                  <label for="">E-mail Address
                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                  </label>
                </div>
              </li>
              <li class="col-md-12">
                <div class="form-group">
                  <label for="">Password
                    <input type="password" name="password" class="form-control" id="password" placeholder="">
                  </label>
                </div>
              </li>
              <li class="col-md-12">
                  <div class="form-group  remember-me">
                      <input type="checkbox" name="remember" id="remember"><label for="remember-check">Remember Me
                  </div>
              </li>
              <li class="col-md-12">
                <button type="submit" class="btn">Sign in</button>
              </li>
            </ul>
          </form>
          
        </div>
      </div>
    </div>
  </section>
@endsection
