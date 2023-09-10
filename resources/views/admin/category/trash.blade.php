@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <form action="{{route('checked.restore')}}" method="POST">
            @csrf

            <div class="card">
                <div class="card-header">
                    <h3>Trash Category Information</h3>
                </div>
                <div class="card-body">
                    @if (session('restore'))
                        <div class="alert alert-info">{{session('restore')}}</div>
                    @endif
                    @if (session('delete'))
                        <div class="alert alert-success">{{session('delete')}}</div>
                    @endif
                    <table class="table table-bordered">
                        <tr>
                            <th>

                                <label for="chkSelectAll" class="form-check-label">
                                    <input class="form-check" id="chkSelectAll" type="checkbox" name="category_id">
                                    <i class="input-frame"></i>
                                    Checked All
                                </label>
                            </th>
                            <th>SL</th>
                            <th>CATEGORY NAME</th>
                            <th>CATEGORY ICON</th>
                            <th>ACTION</th>
                        </tr>

                        @forelse ($categories as $key=>$category )
                        <tr>
                            <td>

                                <div class="form-check">
                                    <label for="" class="form-check-label">
                                        <input class="chkDel form-check-input" type="checkbox" name="category_id[]"
                                            value="{{ $category->id }}">
                                        <i class="input-frame"></i>
                                    </label>
                                </div>
                            </td>
                            <td>{{$key+1}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <img src="{{asset('uploads/category')}}/{{$category->icon}}" alt="">
                            </td>
                            <td>
                                <a title="Restore Trash" href="{{route('category.restore',$category->id)}}" class="btn btn-success btn-icon">
                                    <i data-feather="rotate-cw"></i>
                                </a>
                                <a href="{{route('category.delete',$category->id)}}" class="btn btn-danger btn-icon">
                                    <i data-feather="trash"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">
                                <h5 class="text-center text-info">No Trash Found</h5>
                            </td>
                        </tr>
                        @endforelse
                    </table>
                    {{-- <div class="btn btn-success">
                        <input type="submit" value="1" class="btn btn-success" name="btn">Checked Restore
                    </div>
                  <div class="btn btn-danger">
                    <input type="submit" value="2" class="btn btn-danger" name="btn">Checked Delete
                  </div> --}}
                    <button type="submit" value="1" class="btn btn-success mt-3" name="btn">Checked Restore</button>
                    <button type="submit" value="2" class="btn btn-danger mt-3" name="btn">Checked Delete</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection
@section('footer_script')
    <script>
        $("#chkSelectAll").on('click', function() {
            this.checked ? $(".chkDel").prop("checked", true) : $(".chkDel").prop("checked", false);
        })
    </script>
@endsection
