@extends('layouts.app')

@section('content')
 <!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>{{ auth()->user()->name }}</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Profile</a></li>
        </ul>
      </div>
    </div>
  </section>
  
<section class="top-offer">
<div class="container">
   @include('flash::message')
    <div class="row">
         <div class="col-md-3">
             <ul class="nav nav-pills nav-stacked nav-pills-stacked-example"> 
                 <li role="presentation" class="active"><a href="#">Profile</a></li> 
                 <li role="presentation"><a href="#">Orders</a></li> 
                 <li role="presentation"><a href="#">My Coupons</a></li> </ul>
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

            <form method="POST" action="/profile">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Fullname" value="{{ auth()->user()->name }}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email }}" placeholder="Email">
              </div>
              <button type="submit" class="btn btn-default">Update Info</button>
            </form>

            <hr>
            <h3>Change Password</h3>

             <form method="POST" action="/profile/password">
              {{ csrf_field() }}
              <div class="form-group">
                <label for="old_password">Old Password</label>
                <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Your Current Password" ">
              </div>

              <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="New Password">
              </div>

              <div class="form-group">
                <label for="password">Confirm New Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="New Password">
              </div>
              <button type="submit" class="btn btn-default">Update Password</button>
            </form>
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
