@extends('layouts.admin-index')

@section('title')
 My Order
@endsection

@section('content')

<div class="">
@include('includes.messages')

  <br>
  <div class="row">
    <form class="col-md-12" action="{{ route('post.addstaff') }}" method="post">
      <div class="row">
        <div class="input-field col-md-3">
          <input id="staff_name" type="text" name="staff_name" class="validate">
          <label for="staff_name">Username</label>
        </div>
        <div class="input-field col-md-3">
          <input id="passsword" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col-md-3">
          <input id="password2" type="password" name="password2" class="validate">
          <label for="password2">Re-enter Password</label>
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
    <div class="col-md-4 col-md-offset-1">
      <ul class="collection z-depth-2">
          <li class="collection-item blue">
            <h6 class="white-text">Active Users <span class="badge red pull-right">000</span></h6>
          </li>
          @foreach($active as $activ)
          <li href="#!" class="collection-item">{{$activ->staff_name}}</li>
          @endforeach
          
      </ul> 
    </div>

  <!-- Right Panel -->
    <div class="col-md-4 col-md-offset-1">
      <ul class="collection z-depth-2">
          <li class="collection-item blue">
            <h6 class="white-text">No PC <span class="badge red pull-right">000</span></h6>
          </li>
          @foreach($nonpc as $npc)
          <li href="#!" class="collection-item">{{$npc->staff_name}}</li>
          @endforeach
      </ul> 
    </div>

</div>
</div>

@endsection