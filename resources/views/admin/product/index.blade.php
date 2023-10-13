@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header_info d-flex justify-content-between align-items-center">
                        <h3>Add New Product</h3>
                    <a class="btn btn-primary" href="{{route('product.list')}}"><i data-feather="list"></i> Product List</a>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                    @endif
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Category</label>
                                    <select class="form-control category" name="category_id" id="">
                                        <option value="">Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach


                                    </select>

                                    @error('category_id')
                                        <div class="alert alert-danger my-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Sub Category</label>
                                    <select class="form-control subcategory" name="subcategory_id" id="">
                                        {{-- <option value="">Select Sub Category</option> --}}




                                    </select>

                                    @error('subcategory_id')
                                        <div class="alert alert-danger my-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Brand</label>
                                    <select class="form-control" name="brand_id" id="">
                                        <option value="">Select Brand</option>

                                        @foreach ($brands as $brand )

                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                        @endforeach

                                    </select>

                                    {{-- @error('brand_id')
                                        <div class="alert alert-danger my-3">{{ $message }}</div>
                                    @enderror --}}
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Product Name</label>
                                    <input class="form-control" type="text" name="product" id="">

                                    @error('product')
                                    <div class="alert alert-danger my-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Price</label>
                                    <input class="form-control" type="number" name="price" id="">
                                    @error('price')
                                    <div class="alert alert-danger my-3">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Discount (%)</label>
                                    <input class="form-control" type="number" min="0" max="100" name="discount" id="">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <label class="form-label" for="">Tags</label>
                                    <input type="text" name="tags[]" id="input-tags" value="" />
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <label class="form-label" for="">Short Description</label>
                                    {{-- <input class="form-control" id="summernote3" type="text" name="short_desp" id=""> --}}
                                    <textarea class="form-control" id="summernote3" name="short_desp" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <label class="form-label" for="">Long Description</label>
                                    <textarea class="form-control" id="summernote" name="long_desp" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-check">
                                    <label class="form-label" for="">Additional Description</label>
                                    <textarea class="form-control" id="summernote2" name="addi_desp" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-check">
                                    <label class="form-label" for="">Preview Image</label>
                                    <input class="form-control" type="file" name="preview" id="" onchange="document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])">
                                    <img src="" width="150" id="preview" alt="">

                                    @error('preview')
                                    <div class="alert alert-danger my-3">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="col-lg-6">
                                {{-- <div class="form-check">
                                    <label class="form-label" for="">Gallery Image</label>
                                    <input class="form-control" type="file" name="gallery[]" id="">
                                </div> --}}

                                <div class="upload__box">
                                    <div class="upload__btn-box">
                                      <label class="upload__btn">
                                        Upload Image
                                        <input width="150" name="gallery[]" type="file" multiple="" data-max_length="20" class="upload__inputfile">
                                      </label>
                                    </div>
                                    <div class="upload__img-wrap"></div>
                                  </div>
                            </div>

                            <div class="col-lg-6 mx-auto mt-4">
                                <button type="submit" class="btn btn-primary w-100">Add Product</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    <script>
        $("#input-tags").selectize({
            delimiter: ",",
            persist: false,
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });
    </script>
    <script>
        $('.category').change(function() {
            let category_id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'/getsubcategory',
                type: 'POST',
                data:{'category_id': category_id},

                success:function(data){
                    $('.subcategory').html(data);
                }
            });

        })
    </script>
    <script>
        $(document).ready(function() {
        $('#summernote').summernote();
        $('#summernote2').summernote();
        $('#summernote3').summernote();
        });
    </script>

    <script>
        jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}
    </script>
@endsection
