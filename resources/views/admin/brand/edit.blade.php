@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-5 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>Update Brand</h3>
            </div>
            <div class="card-body">
                @if (session('success_update'))
                 <div class="mb-2 alert alert-success">{{session('success_update')}}
                </div>
                @endif

                <form action="{{route('brand.final.update' , $brands->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-check">
                        <label for="" class="form-label">Brand Name</label>
                        <input type="text" name="brand_name_update" class="form-control" value="{{$brands->brand_name}}">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Brand Image</label>
                       <img class="d-block" src="{{asset('uploads/brand')}}/{{$brands->brand_logo}}" width="200" alt="">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Brand</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
