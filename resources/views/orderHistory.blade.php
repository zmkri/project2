@extends('layouts.index')

@section('title')
 My Order
@endsection

@section('content')

<div class="container">
@include('includes.messages')

  <table class="table table-hover">
        <thead>
            <tr>
                <th>Date</th>
                <th>Name</th>
                <th>Orders</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderHist as $history)
            <tr>
                <td>{{$history->created_at}}</td>
                <td>{{$history->uname}}</td>
                <td>{{$history->food}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection