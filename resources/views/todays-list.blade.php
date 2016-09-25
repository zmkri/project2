@extends('layouts.admin-index')

@section('title')
 Today's List
@endsection

@section('content')

<div class="">
@include('includes.messages')
    <div class="row">
        <button class="btn-floating btn-small blue waves-effect red" onClick="printOut('todo')"><span class="fa fa-sm fa-print"></span></button>
        <button type="button" class="btn btn-primary pull-right">Total&nbsp;&nbsp;<span class="badge">{{$listTot}}</span></button>
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
            @foreach($listOfToday as $list)
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