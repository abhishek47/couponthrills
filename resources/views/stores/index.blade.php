@extends('layouts.app')


@section('content')

  <!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Websites &amp; Apps</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Stores</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  
  <section class="stores">
    <div class="container"> 
     
      <div class="tittle">
          <h3>Best Shopping Destinations</h3>
        
       
       <br><br><br>
      
   
        @foreach($categories as $cat => $stores)
        
        <div class="letters">
          <h3>{{ $cat }}</h3>
       
            @foreach(array_chunk($stores, 3) as $storesSet)
             <div class="row">
               @foreach($storesSet as $store)
                     <div class="col-sm-4">
                     <li style="margin-top: 15px;margin: 35px;">
                        <div style="width: 90px;margin:0 auto;">
                          <img src="{{ $store->STORE_LOGOV2 }}" style="width: 90px;">
                        </div>
                         <a target="_blank" href="{{ $store->STORE_LINK }}" style="text-align: center;font-size: 18px;"> {{ $store->STORE_NAME }}</a>
                     </li>
                     </div>
                    @endforeach
              </div>
           
            @endforeach
          
        </div>
        @endforeach
      
  </section> 

  

@endsection