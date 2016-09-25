@extends('layouts.admin-index')

@section('title')
 My Order
@endsection

@section('content')

<div class="">
@include('includes.messages')
  <h5>Add Foods</h5>
  <!-- <form  class="col-md-12"  action="{{ route('post.addfood') }}" method="post">
	<div class="row">
	  	<div class="col-md-6 col-sm-12">
	      <input placeholder="Food Item" id="menu" name="menu" type="text" class="validate">
	    </div>
	    <div class="col-md-3">
            <select name="type">
                <option value="NULL" disabled selected>Select Category</option>
                <option value="Option-1">Option-1</option>
                <option value="Option-2">Option-2</option>
                <option value="Extras">Extras</option>
            </select>
        </div>
	    <div class="col-md-3 col-sm-12">
	      <button class="btn btn-sm btn-default blue" type="submit">Add</button>
	      <input type="hidden" name="_token" value="{{ Session::token() }}">
	    </div>
	</div>
  </form> -->

  <form  class="col-md-12"  action="{{ route('post.addfood') }}" method="post">
  	<div class="row">
        <div class="col-md-3">
            <select name="type">
                <option value="NULL" disabled selected>Select Category</option>
                <option value="Option-1">Option-1</option>
                <option value="Option-2">Option-2</option>
                <option value="Extras">Extras</option>
            </select>
        </div>

        <div class="col-md-9">
		    <div class="input-field">
		      <input placeholder="Food Item" id="menuu" name="menu" type="text" class="validate">
		    </div>
	    </div>
    </div>
    <div class="row text-center">
    	<button type="submit" class="btn btn-success waves-effect">Confirm</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    	<a class="btn btn-danger waves-effect">Cancel</a>
    </div>
  </form>



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