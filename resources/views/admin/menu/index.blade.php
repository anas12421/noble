@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Menu List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Menu Name</th>
                        <th>Menu Link</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($menus as $sl=>$menu)
                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$menu->menu_name}}</td>
                        <td>{{$menu->menu_link}}</td>
                        <td>
                            <a href="{{route('menu.delete',$menu->id)}}" class="btn btn-danger btn-icon">
                                <i data-feather="trash"></i>
                            </a>
                            <a href="" class="btn btn-primary btn-icon">
                                <i data-feather="edit"></i>
                            </a>
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
                <h3>Add Menu</h3>
            </div>
            <div class="card-body">
                <form action="{{route('menu.store')}}" method="POST">
                    @csrf

                    <div class="form-check">
                        <label for="" class="form-label">Menu Name</label>
                        <input type="text" name="menu_name" class="form-control" id="">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Menu Link</label>
                        <input type="text" name="menu_link" class="form-control" id="">
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Add Menu</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
