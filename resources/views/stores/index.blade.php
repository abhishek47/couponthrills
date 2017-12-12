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
  
  <!--
  <section class="stores">
    <div class="container"> 
     
      <div class="tittle">
        <h3>A Curated list of best online resources for your need.</h3>
        
       
        <form class="finde">
          <select name="cat">
             <option value="0">All</option>
            @foreach($categories as $cat)
             <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach 
          </select>
          <button type="submit">Filter</button>
        </div>
      </form>
      
      @if(isset($scat))
        
          <h3>{{ $scat->name }}</h3>
          <ul class="row">
            @foreach($scat->stores->chunk(1) as $storesSet)
            <li class="col-sm-4">
              <ul class="link-letter">
                @foreach($storesSet as $store)
                 <li style="margin-top: 15px;">
                    <div style="width: 90px;margin:0 auto;">
                      <img src="{{ $store->logo_path }}" style="width: 90px;">
                    </div>
                     <a target="_blank" href="{{ $store->link }}" style="text-align: center;font-size: 18px;"> {{ $store->name }}</a>
                 </li>
                @endforeach
              </ul>
            </li>
            @endforeach
          </ul>
        </div>

      @else 
        @foreach($categories as $cat)
        
        <div class="letters">
          <h3>{{ $cat->name }}</h3>
          <ul class="row">
            @foreach($cat->stores->chunk(1) as $storesSet)
            <li class="col-sm-4">
              <ul class="link-letter">
                @foreach($storesSet as $store)
                 <li style="margin-top: 15px;">
                    <div style="width: 90px;margin:0 auto;">
                      <img src="{{ $store->logo_path }}" style="width: 90px;">
                    </div>
                     <a target="_blank" href="{{ $store->link }}" style="text-align: center;font-size: 18px;"> {{ $store->name }}</a>
                 </li>
                @endforeach
              </ul>
            </li>
            @endforeach
          </ul>
        </div>
        @endforeach
      @endif 
  </section> -->

  <section class="stores">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>Best Shopping Destinations</h3>
        
        <!--======= FILTERS LETTERS =========-->
        <div class="finde">
          <select>
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
            <option>E</option>
            <option>F</option>
            <option>G</option>
          </select>
          <button type="submit">all</button>
        </div>
      </div>
      
      <!--======= A =========-->
      <div class="letters">
        <h3>A</h3>
        <ul class="row">
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Amazon (2)</a></li>
              <li><a href="#."> Aaa Stores (5)</a></li>
              <li><a href="#."> Apple (6)</a></li>
              <li><a href="#."> Adam &amp; Eve (2)</a></li>
              <li><a href="#."> Ali Express (6)</a></li>
              <li><a href="#."> Adorama (2)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Ann Taylor (2)</a></li>
              <li><a href="#."> Aero (5)</a></li>
              <li><a href="#."> American Eagle (6)</a></li>
              <li><a href="#."> Adam &amp; Eve (2)</a></li>
              <li><a href="#."> Asos (6)</a></li>
              <li><a href="#."> Addimon (2)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter no-border">
              <li><a href="#."> Airtel (2)</a></li>
              <li><a href="#."> American Swan (5)</a></li>
              <li><a href="#."> Ace2Three (6)</a></li>
              <li><a href="#."> Airbnb (2)</a></li>
              <li><a href="#."> Adibas (6)</a></li>
              <li><a href="#."> Adorama (2)</a></li>
            </ul>
          </li>
        </ul>
      </div>
      
      <!--======= B =========-->
      <div class="letters">
        <h3>B</h3>
        <ul class="row">
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Beauty.Com (2)</a></li>
              <li><a href="#."> Best Buy (5)</a></li>
              <li><a href="#."> Bluehost (6)</a></li>
              <li><a href="#."> Booking.Com (2)</a></li>
              <li><a href="#."> Beebay (6)</a></li>
              <li><a href="#."> Big Rock (2)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Bhaap.Com (2)</a></li>
              <li><a href="#."> BlueStone.Com (5)</a></li>
              <li><a href="#."> Bonita (6)</a></li>
              <li><a href="#."> Adam &amp; Eve (2)</a></li>
              <li><a href="#."> Book My Flowers (6)</a></li>
              <li><a href="#."> Book Adda (2)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter no-border">
              <li><a href="#."> BtechGuru (2)</a></li>
              <li><a href="#."> Bag It Today (5)</a></li>
              <li><a href="#."> Basics Life (6)</a></li>
            </ul>
          </li>
        </ul>
      </div>
      
      <!--======= C =========-->
      <div class="letters">
        <h3>C</h3>
        <ul class="row">
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Carter’s (2)</a></li>
              <li><a href="#."> Casa.Com (5)</a></li>
              <li><a href="#."> Cake Studio (6)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Clear Strip (2) </a></li>
              <li><a href="#."> Coke2Home (5)</a></li>
              <li><a href="#."> Country Oven (6)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter no-border">
              <li><a href="#."> Clear Strip (2) </a></li>
              <li><a href="#."> Coke2Home (5)</a></li>
              <li><a href="#."> Country Oven (6)</a></li>
            </ul>
          </li>
        </ul>
      </div>
      
      <!--======= D =========-->
      <div class="letters">
        <h3>D</h3>
        <ul class="row">
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#.">Daily Objects (2)</a></li>
              <li><a href="#."> Delivery Chef (5)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter">
              <li><a href="#."> Dell (2)</a></li>
              <li><a href="#."> Domino’s (5)</a></li>
            </ul>
          </li>
          <li class="col-sm-4">
            <ul class="link-letter no-border">
              <li><a href="#."> Dyson (2)</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </section>

@endsection