@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Category</h3>
            </div>
            <div class="card-body">
                <form action="{{route('category.update' , $category->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-check mb-2">
                        <label for="cat_name" class="form-label">Category Name</label>
                        <input type="text" name="cat_name" class="form-control" id="cat_name" value="{{$category->category_name}}">
                    </div>
                     @error('cat_name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <div class="form-check mb-2">
                        <label for="cat_icon" class="form-label">Category Icon</label>
                        <input type="file" name="icon" class="form-control" id="cat_icon" onchange="document.getElementById('cat').src = window.URL.createObjectURL(this.files[0])">
                        <img width="100" src="{{asset('uploads/category')}}/{{$category->icon}}" id="cat" alt="">
                    </div>
                    @error('icon')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                    <button type="submit" class="btn btn-primary">Add category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
