@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Banner Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($banners as $sl=>$banner )

                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$banner->title}}</td>
                        <td>{{$banner->link}}</td>
                        <td><img src="{{asset('uploads/banner')}}/{{$banner->photo}}" alt=""></td>
                        <td>
                            <a href="{{route('banner.delete',$banner->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Add Banner</h3>
            </div>
            <div class="card-body">
                <form action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" id="">
                        @error('title')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" id="">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" onchange="document.getElementById('profile').src = window.URL.createObjectURL(this.files[0])" >
                        <img src="" id="profile" width="200" alt="">

                        @error('photo')
                        <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Banner</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
