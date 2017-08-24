@extends('layouts.app')


@section('content')

  <!--======= BANNER =========-->
  <section class="sub-banner">
    <div class="overlay">
      <div class="container">
        <h2>Find best websites and apps</h2>
        <ul class="sub-nav">
          <li><a href="#."><i class="fa fa-home"></i></a> / </li>
          <li><a href="#.">Stores</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <!--======= FEATURED CATEGORIES =========-->
  <section class="stores">
    <div class="container"> 
      <!--======= TITTLE =========-->
      <div class="tittle">
        <h3>A Curated list of best online resources for your need.</h3>
        
        <!--======= FILTERS LETTERS =========-->
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
         <!--======= A =========-->
        <div class="letters">
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
        <!--======= A =========-->
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
  </section>


@endsection