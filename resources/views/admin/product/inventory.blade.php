@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h4>Inventory for <span class="badge badge-primary">{{$products->product_name}}</span> </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($inventories as $sl=>$inventory )
                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$inventory->rel_to_color->color_name}}</td>

                        <td>

                            @foreach ($sizes as $size)
                            {{$size->id == $inventory->size_id ? $size->size_name : ''}}
                           @endforeach
                        </td>

                        <td>{{$inventory->quantity}}</td>
                        <td>
                            <a href="{{route('inventory.delete' , $inventory->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h4>Add Inventory</h4>
            </div>
            <div class="card-body">
                <form action="{{route('inventory.store', $products->id)}}" method="POST">
                    @csrf

                    <div class="form-check">
                        <label for="" class="form-label">Product</label>
                        <input type="text" disabled value="{{$products->product_name}}" class="form-control">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Color</label>
                        <select name="color_id" id="">
                            <option value="">Select Color</option>
                            @foreach ($colors as $color )

                            <option value="{{$color->id}}">{{$color->color_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Size</label>
                        <select name="size_id" id="">
                            <option value="">Select Sub Category</option>
                            @foreach (App\Models\Size::where('category_id' , $products->category_id)->get() as $size )

                            <option value="{{$size->id}}">{{ $size->size_name }} </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Quantity</label>
                        <input type="text" name="quantity" class="form-control">
                    </div>

                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Add Inventory</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
