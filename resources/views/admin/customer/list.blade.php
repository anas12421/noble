@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Customer Information</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Zip</th>
                        <th>Address</th>
                        <th>Photo</th>
                    </tr>

                    @foreach ($customers as $sl=>$customer)
                     <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$customer->fname.' '.$customer->lname}}</td>
                        <td>{{$customer->email}}</td>
                        <td>{{'+'.$customer->phone_code.' '.$customer->phone}}</td>
                        <td>{{$customer->zip}}</td>
                        <td>{{$customer->address}}</td>
                        <td>
                            @if ($customer->photo == null)
                            <img class="m-auto" src="{{ Avatar::create($customer->fname.' '.$customer->lname)->toBase64() }}">

                            @else
                            <img class="m-auto" src="{{asset('uploads/customer')}}/{{$customer->photo}} " alt="">
                            @endif
                        </td>
                     </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
