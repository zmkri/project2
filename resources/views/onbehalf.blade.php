@extends('layouts.admin-index')

@section('title')
 On Behalf
@endsection

@section('content')

<div class="container">
@include('includes.messages')

  <form  class="col-md-12"  action="{{ route('post.orderAdmin') }}" method="post">
  	<div class="row">
        <div class="col-md-3">
        <br><br>
            <select name="uname">
                <option value="NULL" disabled selected>Select Staff</option>
            @foreach($behalfOf as $behalf)
                <option value="{{$behalf->staff_name}}">{{$behalf->staff_name}}</option>
            @endforeach

            </select>
        </div>

        <div class="col-md-9">
		    <div class="input-field">
		      <textarea id="textarea1" class="materialize-textarea" placeholder="Order" name="order"></textarea>
		    </div>
	    </div>
    </div>
    <div class="row text-center">
    	<button type="submit" class="btn btn-success waves-effect">Confirm</button>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    	<a class="btn btn-danger waves-effect">Cancel</a>
    </div>
  </form>
</div>

@endsection