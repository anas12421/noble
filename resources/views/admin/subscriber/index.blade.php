@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Subscriber List</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Customer Id</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($subscribers as $sl=>$subscriber )

                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$subscriber->customer_id}}</td>
                        <td>{{$subscriber->email}}</td>
                        <td>
                            <a href="{{route('subscriber.delete', $subscriber->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
