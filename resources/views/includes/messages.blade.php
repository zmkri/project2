@if(count($errors) > 0)
<div class="row">
	<div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Warning!</strong> 
      	<ul >
			@foreach($errors->all() as $error)
				 <li style="list-style-type: none;">{{ $error }}</li>
			@endforeach
		</ul>
    </div>
</div>
@endif


@if(Session::has('message'))
<div class="row">
	<div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">×</button>
       {{Session::get('message')}}
    </div>
</div>
@endif

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