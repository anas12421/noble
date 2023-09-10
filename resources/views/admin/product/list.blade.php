@extends('layouts.admin')

@section("content")
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3>Product List</h3>
                <a href="{{route('product')}}" class="btn btn-primary"> <i data-feather="plus"></i> Add New Product</a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Category Name</th>
                        <th>Subcategory Name</th>
                        <th>Brand Name</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>After Discount</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($products as $key=>$product )
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>

                           @foreach ($categories as $category)
                           {{ $category->id == $product->category_id ? $category->category_name : '' }}
                           @endforeach

                        </td>
                        <td>

                           @foreach ($subcategories as $subcategory)
                           {{ $subcategory->id == $product->subcategory_id ? $subcategory->sub_category : '' }}
                           @endforeach
                        </td>
                        <td>
                            @foreach ($brands as $brand)
                            {{ $brand->id == $product->brand_id ? $brand->brand_name : '' }}
                            @endforeach

                            {{ ($product->brand_id == null)? 'No Brand' : '' }}
                        </td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            {{ ($product->discount == null) ? 'No Discount' : $product->discount.'%' }} 
                        </td>
                        <td>{{$product->after_discount}}</td>

                        <td>
                            <img src="{{asset('uploads/product/preview')}}/{{$product->preview}}" width="200" alt="">
                        </td>

                        <td>
                            <input type="checkbox" data-id="{{$product->id}}" class="status" data-toggle="toggle" value="{{$product->status}}" {{$product->status == 1 ? 'checked' : ''}}>
                        </td>

                        <td>
                            <a href="{{ route('product.delete', $product->id) }}" class="btn btn-icon btn-danger">
                                <i data-feather="trash"></i>
                            </a>

                            <a href="{{ route('inventory', $product->id) }}" class="btn btn-icon btn-warning">
                                <i data-feather="layers"></i>
                            </a>
                            <a title="View" href="{{ route('product.edit', $product->id) }}" class="btn btn-icon btn-primary">
                                <i data-feather="eye"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection



@section('footer_script')
<script>
    $(".status").change(function(){
        // var status = $('input[class="status"]:checked').attr('value');

        if($(this).val() != 1){
            $(this).attr('value' , 1);
        }

        else{
            $(this).attr('value' , 0);
        }

        var product_id = $(this).attr('data-id');
        var status = $(this).val() ;




        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:'/getstatus',
            type: 'POST',
            data:{'product_id': product_id , 'status' : status},

            success:function(data){

            }
        });




    })
</script>
@endsection
