@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <div class="card">
          <div class="card-header">
              <h3>Customer Order List</h3>
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
                      <td>
                        {{$order->total}}
                        
                    </td>
                      <td>{{$order->created_at->diffForHumans()}}</td>
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
                          {{-- <a href="{{route('download.invoice' ,$order->id)}}" target="_blank" class="btn btn-info">Download Invoice</a> --}}
                        @if ($order->status == 5)
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Change Status
                            </button>
                            <ul class="dropdown-menu">
                              <li><button name="status" class="dropdown-item {{$order->status == 5 ? 'bg-secondary text-white' : ''}}" type="submit" value="5">Cancled</button></li>
                            </ul>
                          </div>

                          @else

                          <form action="{{route('order.status' , $order->id)}}" method="POST">
                            @csrf
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Change Status
                                </button>
                                <ul class="dropdown-menu">
                                  <li><button name="status" class="dropdown-item {{$order->status == 0 ? 'bg-secondary text-white' : ''}}" type="submit" value="0">Placed</button></li>
                                  <li><button name="status" class="dropdown-item {{$order->status == 1 ? 'bg-secondary text-white' : ''}}" type="submit" value="1">Processing</button></li>
                                  <li><button name="status" class="dropdown-item {{$order->status == 2 ? 'bg-secondary text-white' : ''}}" type="submit" value="2">Shipping</button></li>
                                  <li><button name="status" class="dropdown-item {{$order->status == 3 ? 'bg-secondary text-white' : ''}}" type="submit" value="3">Ready for Deliver</button></li>
                                  <li><button name="status" class="dropdown-item {{$order->status == 4 ? 'bg-secondary text-white' : ''}}" type="submit" value="4">Delivered</button></li>
                                  <li><button name="status" class="dropdown-item {{$order->status == 5 ? 'bg-secondary text-white' : ''}}" type="submit" value="5">Cancled</button></li>
                                </ul>
                              </div>
                          </form>
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
@endsection
