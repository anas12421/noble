@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Brand List</h3>
            </div>
            <div class="card-body">
                
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Brand Name</th>
                        <th>Brand Logo</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($brands as $key=>$brand )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$brand->brand_name}}</td>
                        <td>
                            <img width="150" src="{{asset('uploads/brand')}}/{{$brand->brand_logo}}" alt="">
                        </td>
                        <td>

                            <a href="{{route('brand.update' , $brand->id )}}" class="btn btn-primary btn-icon">
                                <i data-feather="edit"></i>
                            </a>
                            <a href="{{ route('brand.delete', $brand->id) }}" class="btn btn-danger btn-icon">
                                <i data-feather="trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>




  <!-- Modal -->
  {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{route('brand.update')}}" method="POST">
                @csrf

                <div class="form-check">
                    <label for="" class="form-label">Brand Name</label>
                    <input type="text" name="brand_name_update" class="form-control" value="">
                </div>

                <button type="submit" class="btn btn-primary">Update Brand</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}

    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Brand</h3>
            </div>
            <div class="card-body">
                <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Brand Name</label>
                        <input type="text" name="brand_name" class="form-control text-uppercase" id="">

                        @error('brand_name')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Brand Image</label>
                        <input type="file" name="brand_logo" class="form-control" id="" onchange="document.getElementById('brand_img').src = window.URL.createObjectURL(this.files[0])">
                        <img width="150" src="" id="brand_img" alt="">
                        @error('brand_logo')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Brand</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


<!-- Button trigger modal -->



