@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Sub category Info</h3>
            </div>
            <div class="card-body">
                <div class="row">

                    @foreach ($categories as $category )

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header bg-info d-flex justify-content-around align-items-center">
                                <h3>{{$category->category_name}}</h3>
                                 <img width="50" src="{{asset('uploads/category')}}/{{$category->icon}}" alt="">
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sl</th>
                                        <th>Sub Category</th>
                                        <th>Action</th>
                                    </tr>
                                    @foreach (App\Models\Subcategory::where('category_id',$category->id)->get() as $key=>$sub_cat )

                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$sub_cat->sub_category}}</td>
                                        <td>
                                            <a href="{{route('subcategory.edit', $sub_cat->id)}}" class="btn btn-warning btn-icon">
                                                <i data-feather="edit"></i>
                                            </a>
                                            <button data-link="{{route('subcategory.delete', $sub_cat->id)}}" class="del_btn btn btn-danger btn-icon">
                                                <i data-feather="trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </table>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New Sub Category</h3>
            </div>
            <div class="card-body">
                @if (session('exist'))
                <div class="alert alert-warning">{{session('exist')}}</div>

                @endif
                <form action="{{route('subcategory.store')}}" method="POST">
                    @csrf
                    <div class="form-check">
                        <select name="category" id="">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category )
                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Sub Category Name</label>
                        <input type="text" name="sub_category" class="form-control">
                    </div>
                    @error('sub_category')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    <button type="submit" class="btn btn-primary">Add Sub Category</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_script')
<script>
    $(".del_btn").on('click', function(){
    let link =$(this).attr('data-link')

        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            window.location.href= link
        }
        })
    })
</script>
@if (session('delete'))
 <script>
     Swal.fire(
      'Deleted!',
      '{{session('delete')}}',
      'success'
    )
 </script>

@endif
@endsection
