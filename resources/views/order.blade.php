@extends('layouts.index')

@section('title')
 My Order
@endsection

@section('content')

<div class="">
@include('includes.messages')
  <p>Welcome, {{{  Auth::user()->staff_name}}} </p>


<!--   <p>
<?php
// $today = (int) date('G:m', time()+10800);
// $time1 = (int) date('h:m', time()+36000);
// $rnow = strtotime('now');
// $rnow = $rnow/36000;

// echo $today.'<br>';
// echo $time1. '<br>';
// echo $rnow;
  ?>
  </p> -->
  <br>
  <div class="row">
    <form class="col-md-12" action="{{ route('post.order') }}" method="post">
      <div class="row">
        <div class="input-field col-md-10">
          <textarea id="order" class="materialize-textarea" name="order"></textarea>
          <label for="order">Make Order</label>
        </div>
        <div class="col-md-2">
        	<button type="submit" class="btn btn-info waves-effect waves-light">Submit</button>
          <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
      </div>
    </form>
  </div>

   <div class="row">
  <!-- Left Panel -->
    <div class="col-md-4">
      <ul class="collection z-depth-2">
          <li class="collection-item blue">
            <h6 class="white-text">Option-1 <span class="badge red pull-right">{{$opt1_tot}}</span></h6>
          </li>
          @foreach($opt1 as $option1)
          <li href="#!" class="collection-item">{{ $option1->menu }}</li>
          @endforeach
      </ul> 
    </div>

    <!-- Center Panel -->
    <div class="col-md-4">
      <ul class="collection z-depth-2">
          <li class="collection-item blue"><h6 class="white-text">Option-2 <span class="badge red pull-right">{{$opt2_tot}}</span></h6></li>
          @foreach($opt2 as $option2)
          <li href="#!" class="collection-item">{{ $option2->menu }}</li>
          @endforeach
      </ul> 
    </div>

    <!-- Right Panel -->
    <div class="col-md-4">
      <ul class="collection z-depth-2">
          <li class="collection-item blue"><h6 class="white-text">Extras <span class="badge red pull-right">{{$extra_tot}}</span></a></h6></li>
          @foreach($extra as $extras)
          <li href="#!" class="collection-item">{{ $extras->menu }}</li>
          @endforeach
      </ul>     
    </div>
  </div>
</div>

@endsection