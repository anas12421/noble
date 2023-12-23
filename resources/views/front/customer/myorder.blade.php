@extends('front.master')
@section('content')
@include('brade')
<!-- end page-title -->

<div class="container">
    <div class="row">
        <div class="col-lg-3">

                <div class="me-3">
                  <ul>
                    <li><a href="{{route('customer.profile')}}" class="btn  w-100">Profile</a></li>
                    <li><a href="" class="btn btn-primary w-100" >My Order</a></li>
                    <li><a href="" class="btn w-100" >My Wishlist</a></li>
                    <li><a  class="text-center btn btn-warning w-100" href="{{route('customer.logout')}}" class="nav-link" >Logout</a></li>
                  </ul>
                </div>

        </div>
        <div class="col-lg-8">


                  <div class="row">
                      <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Order List</h3>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>SL</th>
                                        <th>Order ID</th>
                                        <th>Total</th>
                                        <th>Order Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>

                                    @forelse ( $orders as $order )

                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$order->order_id}}</td>
                                        <td>{{$order->total}}</td>
                                        <td>{{$order->created_at->format('D-d-M-Y')}}</td>
                                        <td>
                                            @if ($order->status == 0)
                                            <span class="badge bg-secondary">Placed</span>

                                            @elseif ($order->status == 1)
                                            <span class="badge bg-primary">Processing</span>
                                            @elseif ($order->status == 2)
                                            <span class="badge bg-warning">Shipping</span>
                                            @elseif ($order->status == 3)
                                            <span class="badge bg-info">Ready For Deliver</span>
                                            @elseif ($order->status == 4)
                                            <span class="badge bg-success">Received</span>
                                            @elseif ($order->status == 5)
                                            <span class="badge bg-danger">Canceled</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($order->status == 5)
                                             <button disabled class="btn btn-success">Order Canceled</button>
                                             <a href="{{route('delete.order' ,$order->id)}}" title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                             @elseif ($order->status == 4)
                                             <a href="{{route('download.invoice' ,$order->id)}}" title="Download Invoice" target="_blank" class="btn btn-warning"><i class="fa-solid fa-download"></i></a>
                                             <a href="{{route('delete.order' ,$order->id)}}" title="Delete" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            @elseif (App\Models\OrderCancel::where('order_id' , $order->id)->exists())
                                            <a href="{{route('download.invoice' ,$order->id)}}" title="Download Invoice" target="_blank" class="btn btn-warning"><i class="fa-solid fa-download"></i></a>
                                            <button disabled title="Already Sent Request" class="btn btn-info"><i class="fa-solid fa-check"></i></button>
                                            @else
                                            <a href="{{route('download.invoice' ,$order->id)}}" title="Download Invoice" target="_blank" class="btn btn-warning"><i class="fa-solid fa-download"></i></a>
                                            <a href="{{route('cancel.order' ,$order->id)}}" title="Cancel Order" class="btn btn-danger"><i class="fa-solid fa-cancel"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    @empty

                                    <tr>
                                        <td colspan="6" class="text-center"><h2>No Order Found</h2></td>
                                    </tr>

                                    @endforelse ( )



                                </table>
                            </div>
                        </div>
                      </div>
                  </div>
        </div>
    </div>
</div>
@endsection
