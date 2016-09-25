@extends('layouts.admin-index')

@section('title')
 Old/Previous List
@endsection

@section('content')

<div class="">
@include('includes.messages')
    <div class="row">
        <form method="" action="" class="">
            <div class="col-md-6">
                <input type="date" class="datepicker">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary"> Search</button>
            </div>
        </form>
        <div class="col-md-3">
            <button class="btn-floating btn-small blue waves-effect red" onClick="printOut('todo')"><span class="fa fa-sm fa-print"></span></button>
        </div>
    </div>
    
<div id= "todo">
  <table class="table table-hover">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listOld as $list)
            <tr>
                <td>{{$list->created_at}}</td>
                <td>{{$list->uname}}</td>
                <td>{{$list->food}}</td>
            </tr>
            @endforeach
        </tbody>
 </table>
</div>

</div>

@endsection