@extends('layouts.app')
@section('content')
<section class="sub-banner">
	<div class="overlay">
		<div class="container">
			<h2>Tic-Tac-Toe</h2>
			<ul class="sub-nav">
				<li><a href="#."><i class="fa fa-home"></i></a> / </li>
				<li><a href="#.">Games </a> / </li>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<br>
		<div class="panel panel-default">
		<div class="panel-heading" style="padding-bottom: 0px;background: #f8f8f8">
                                        <div class="author-meta">
                                            <div class="name"><h4 style="font-size: 28px;">A simple game of tic tac toe to play! <span style="font-size: 28px;color: #f39c12;font-weight: bold;">[ 15 Tokens ]</span></h4></div>
                                            <p style="color: #0b0b0b;font-size: 17px;">You play as <span class="red">X</span> and the computer plays as <span class="blue">O</span>! Start by choosing a square to play</p>
                                        </div>
                                      </div>	
		 <div class="panel-body">
			
			<div class="row">
			<div class="col-md-7">
			<div class="tic-tac-toe">
				<div id="square1" class="tile free"></div>
				<div id="square2" class="tile free"></div>
				<div id="square3" class="tile free"></div>
				<div id="square4" class="tile free"></div>
				<div id="square5" class="tile free"></div>
				<div id="square6" class="tile free"></div>
				<div id="square7" class="tile free"></div>
				<div id="square8" class="tile free"></div>
				<div id="square9" class="tile free"></div>
			</div>
			</div>

			<div class="col-md-5">
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- ct-1 -->
				<ins class="adsbygoogle"
				     style="display:block"
				     data-ad-client="ca-pub-8430312518838448"
				     data-ad-slot="8051752246"
				     data-ad-format="auto"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			</div>
			</div>
			
			<a href="" id="reset-button" class="btn">Reset Board <i class="fa fa-certificate"></i></a>
			</div>
	  </div>		
		<br><br>

		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ct-2 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8430312518838448"
     data-ad-slot="7346719824"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>

<br><br>
	</div>
	
</section>
@endsection


@section('js')

<script src="/js/tictac.js"></script>

@endsection