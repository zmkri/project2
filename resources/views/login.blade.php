@extends('layouts.login')

@section('title')
 Log In
@endsection

@section('content')

<div class="container">
@include('includes.messages')
<div class="col-md-4 col-md-offset-4">
    <!--Image Card-->
    <div class="card hoverable">
        <div class="card-content">
            <h5>Log In</h5>
                <form action="{{route('post.signin')}}" method="post" class="">
                    <div class="row">
                        <div class="input-field col-md-12">
                          <input id="icon_prefix" type="text" name="uname" class="validate">
                          <label for="icon_prefix">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col-md-12">
                          <input id="icon_prefix" type="password" name="password" class="validate">
                          <label for="icon_prefix">Password</label>
                        </div>
                    </div>
                    <div class="row text-center">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Log In !</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <a class="btn btn-warning waves-effect waves-light">Cancel</a>
                    </div>

                </form>
                <hr>
                <div class="row text-left">
                    <a href="#" class="link">
                        <p>&nbsp;Forgot Password ? </p>
                    </a>
                </div>
        </div>
        <!--/.Buttons-->
    </div>
    <!--Image Card-->
</div>
</div>

@endsection

<!--
    #     #######  ###  #     #              #     #  #     #  #    #  ######   ### 
   # #         #    #   ##   ##              ##   ##  #     #  #   #   #     #   #  
  #   #       #     #   # # # #              # # # #  #     #  #  #    #     #   #  
 #     #     #      #   #  #  #              #  #  #  #     #  ###     ######    #  
 #######    #       #   #     #              #     #  #     #  #  #    #   #     #  
 #     #   #        #   #     #              #     #  #     #  #   #   #    #    #  
 #     #  #######  ###  #     #              #     #   #####   #    #  #     #  ### 

 +-+ +-+ +-+ +-+   +-+ +-+ +-+ +-+
 |A| |Z| |I| |M|   |M| |U| |K| |R|
 +-+ +-+ +-+ +-+   +-+ +-+ +-+ +-+
                                          
-->