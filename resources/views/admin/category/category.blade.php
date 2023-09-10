@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <form action="{{ route('checked.delete') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3>Category Information</h3>
                    </div>
                    <div class="card-body">
                        @if (session('cat_soft'))
                            <div class="alert alert-info">{{ session('cat_soft') }}</div>
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

                            @foreach ($categories as $key => $category)
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
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $category->category_name }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/category') }}/{{ $category->icon }}" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('category.soft.delete', $category->id) }}"
                                            class="btn btn-danger btn-icon">
                                            <i data-feather="trash"></i>
                                        </a>
                                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-info btn-icon">
                                            <i data-feather="edit"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        <button type="submit" class="mt-2 btn btn-danger">Delete Selected</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add Category</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-check mb-2">
                            <label for="cat_name" class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="cat_name">
                        </div>
                        @error('category_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-check mb-2">
                            <label for="cat_icon" class="form-label">Category Icon</label>
                            <input type="file" name="icon" class="form-control" id="cat_icon"
                                onchange="document.getElementById('cat').src = window.URL.createObjectURL(this.files[0])">
                            <img width="200" src="" id="cat" alt="">
                        </div>
                        @error('icon')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <button type="submit" class="btn btn-primary">Add category</button>
                    </form>
                </div>
            </div>
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
