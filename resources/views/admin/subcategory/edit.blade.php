@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Edit Subcategory</h3>
            </div>
            <div class="card-body">
                <form action="{{route('subcategory.update', $subcategories->id)}}" method="POST">
                    @csrf
                    <div class="form-check">
                        <select name="category" id="">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category )
                                <option {{$subcategories->category_id == $category->id ?'selected':''}} value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Sub Category Name</label>
                        <input value="{{$subcategories->sub_category}}" type="text" name="sub_category" class="form-control">
                    </div>
                    @error('sub_category')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    <button type="submit" class="btn btn-primary">Edit Sub Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

