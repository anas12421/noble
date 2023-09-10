@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Color List</h3>
            </div>
            <div class="card-body ">
                <table class="table table-bordered ">
                    <tr>
                        <th>Sl</th>
                        <th>Color Name</th>
                        <th>Color Code</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($colors as $sl=>$color)
                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$color->color_name == 'NA' ? 'N/A' : $color->color_name }}</td>
                        <td class="d-flex align-items-center">
                            <i style="display:inline-block; height:30px; background-color: {{$color->color_name == 'NA' ? '' : $color->color_code }}; color:{{$color->color_name == 'NA' ? '' : 'transparent' }} " >{{$color->color_name == 'NA' ? 'N/A' : 'color' }}</i>
                            {{$color->color_code}}
                        </td>
                        <td>
                            <a href="{{route('color.delete' , $color->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div class="card mt-4 " style="height: auto">
            <div class="card-header">
                <h3>Size List</h3>
            </div>
            <div class="card-body ">
                <div class="row">
                    @foreach ($categories as $category )

                    <div class="col-lg-6">
                        <div class="card mt-2">
                            <div class="card-header">
                                <h5>{{$category->category_name}}</h5>
                            </div>

                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Size Name</th>
                                        <th>Action</th>
                                    </tr>


                                    @foreach (App\Models\Size::where('category_id', $category->id)->get() as $size )
                                    <tr>
                                        <td>{{$size->size_name}}</td>
                                   
                                            <td>
                                                <a href="{{route('size.delete' , $size->id)}}" class="btn btn-danger">Delete</a>
                                            </td>
                                        
                                    </tr>
                                    @endforeach ()



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
                <h3>Add Color</h3>
            </div>
            <div class="card-body">
                <form action="{{route('color.store')}}" method="POST">
                    @csrf

                    <div class="form-check">
                        <label for="" class="form-label">Color Name</label>
                        <input type="text" name="color_name" class="form-control" id="">

                        @error('color_name')
                         <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Color Code</label>
                        <input type="text" name="color_code" class="form-control text-uppercase" id="">
                        @error('color_code')
                         <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Add Color</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-header">
                <h3>Add Size</h3>
            </div>
            <div class="card-body">
                <form action="{{route('size.store')}}" method="POST">
                    @csrf

                    <div class="form-check">
                        <select name="category_id" class="form-control" id="">
                            <option value="">Select Category</option>

                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->category_name}}</option>
                            @endforeach
                        </select>

                        @error('')
                         <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Color Code</label>
                        <input type="text" name="size_name" class="form-control text-uppercase" id="">
                        @error('color_code')
                         <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Add Size</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
