@extends('layouts.app')



@section('content')
	
	<!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>contact us</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">contact us</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <!--======= CONTACT =========-->
  <section class="contact"> 
    
    <div class="container"> 
      
      <!--======= CONTACT INFORMATION =========-->
      <div class="contact-info">
        <div class="row"> 
          
          <!--======= CONTACT =========-->
          <div class="col-sm-6">
            <h3>get in touch</h3>
            <p>Hello we are CouponThrills. We are here to provide you the best offers through our 
              coupons. Hello we are CouponThrills.</p>
            <ul class="con-det">
              
              <!--======= ADDRESS =========-->
              <li> <i class="fa fa-map-marker"></i>
                <h6>Situated In</h6>
                <p>India</p>
              </li>
              
              <!--======= EMAIL =========-->
              <li> <i class="fa fa-envelope"></i>
                <h6>email</h6>
                <p>couponthrills@gmail.com</p>
              </li>
              
             
            </ul>
            
            <!--======= SOCIAL ICON =========-->
            <ul class="social_icons">
              <li class="facebook"> <a href="#."><i class="fa fa-facebook"></i> </a></li>
              <li class="youtube"> <a href="#."><i class="fa fa-youtube"></i> </a></li>
              <li class="instagram"> <a href="#."><i class="fa fa-instagram"></i> </a></li>
            </ul>
          </div>
          
          <!--======= CONTACT FORM =========-->
          <div class="col-sm-6">
            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>
            <form role="form" id="contact_form" method="post" onSubmit="return false">
              <ul>
                <li>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                </li>
                <li>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </li>
                <li>
                  <input type="text" class="form-control" name="company" id="company" placeholder="Company">
                </li>
                <li>
                  <input type="text" class="form-control" name="website" id="website" placeholder="Website">
                </li>
                <li>
                  <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message"></textarea>
                </li>
                <li>
                  <button type="submit" value="submit" class="btn" id="btn_submit" onClick="proceed();">SEND MESSAGE</button>
                </li>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  


@endsection