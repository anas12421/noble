@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h3>Offer1 Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Discount Price</th>
                        <th>Price</th>
                        <th>Photo</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>{{$offer1->title}}</td>
                        <td>{{$offer1->dis}}</td>
                        <td>{{$offer1->price}}</td>
                        <td>
                            <img src="{{asset('uploads/offer')}}/{{$offer1->photo}}" id="profile" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h3>Update Offer1</h3>
            </div>
            <div class="card-body">
                <form action="{{route('offer.1',$offer1->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Title</label>
                        <input type="text" value="{{$offer1->title}}" name="title" id="" class="form-control">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Discount Price</label>
                        <input type="number" value="{{$offer1->dis}}" name="dis" id="" class="form-control">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Price</label>
                        <input type="number" value="{{$offer1->price}}" name="price" id="" class="form-control">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Date</label>
                        <input type="date" name="date" value="{{$offer1->date}}" id="" class="form-control">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Photo</label>
                        <input type="file" name="photo" id="" class="form-control" onchange="document.getElementById('offer1').src = window.URL.createObjectURL(this.files[0])">
                        <img width="200" src="{{asset('uploads/offer')}}/{{$offer1->photo}}" id="offer1" alt="">
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Update Offer 1</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>





<div class="row mt-5">
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h3>Offer2 Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Sub Title</th>
                        <th>Photo</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>{{$offer2->title}}</td>
                        <td>{{$offer2->sub_title}}</td>
                        <td>
                            <img src="{{asset('uploads/offer')}}/{{$offer2->photo}}" id="profile" alt="">
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h3>Update Offer2</h3>
            </div>
            <div class="card-body">
                <form action="{{route('offer.2',$offer2->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Title</label>
                        <input type="text" value="{{$offer2->title}}" name="title" id="" class="form-control">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Date</label>
                        <input type="text" name="sub_title" value="{{$offer2->sub_title}}" id="" class="form-control">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Photo</label>
                        <input type="file" name="photo" id="" class="form-control" onchange="document.getElementById('offer2').src = window.URL.createObjectURL(this.files[0])">
                        <img width="200" src="{{asset('uploads/offer')}}/{{$offer2->photo}}" id="offer2" alt="">
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Update Offer 1</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
