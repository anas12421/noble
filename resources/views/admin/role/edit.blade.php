@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8 m-auto">
        <div class="cart">
            <div class="cart-header">
                <h3>Edit Role</h3>
            </div>
            <div class="cart-body mt-2">
                <form action="{{route('role.update', $role->id)}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="rn" class="form-label">Role Name</label>
                        <input value="{{$role->name}}" type="text" id="rn" name="role_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        @foreach ($permissions as $permission )

                        <div class="form-check form-check-inline">
                            <input {{$role->hasPermissionTo($permission->name) ?'checked':''}} value="{{$permission->name}}" name="permission[]" type="checkbox" class="form-check-input" id="per{{$permission->id}}">
                            <label class="form-check-label ms-0" for="per{{$permission->id}}">{{$permission->name}}</label>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Update Role</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
