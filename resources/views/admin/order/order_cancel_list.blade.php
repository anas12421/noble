@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-5 m-auto">
        <table class="table table-bordered table-striped" >

                <tr>
                    <th>SL</th>
                    <th>Order ID</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>



                @foreach ($reason as $rsn )

                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{App\Models\Order::find($rsn->order_id)->order_id}}</td>
                    <td>{{$rsn->created_at->diffForhumans()}}</td>
                    <td>
                        <a href="{{route('cancel.details', $rsn->id)}}" class="btn btn-info">View</a>
                        <a href="{{route('cancel.accept', $rsn->id)}}" class="btn btn-warning">Accept</a>
                    </td>
                </tr>
                @endforeach

        </table>
    </div>
</div>
@endsection
@section('footer_script')

@endsection
