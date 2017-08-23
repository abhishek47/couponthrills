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
  

<div class="container">
   @include('flash::message')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!

                    <button class="btn btn-success" data-toggle="modal" data-target="#buytokens">Buy tokens </button>
                </div>
            </div>
        </div>
    </div>
</div>


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
        <br>  <br> 
        <p>You can <b>buy</b> and use these <b>tokens</b> to play <b>different events</b> of quiz, puzzles as well as online tournaments.Winning these events can multiply your tokens to <b>3x more</b> than you invest.These can also be further <b>redeemed to real cash</b>.</p>
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
