@extends('layouts.admin')
@section('content')
<div class="row">


    <div class="col-lg-8">
        <div class="cart">
            <div class="cart-header">
                <h3>User List</h3>
            </div>
            <div class="cart-body mt-3">
                <table class="table table-bordered">
                    <tr>
                        <th>User</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($users as $user )
                    <tr>
                    {{-- <tr class="{{$role->name == 'Developer'? 'd-none':''}}" > --}}
                        <td>{{$user->name}}</td>
                        <td class="text-wrap">
                            @forelse ($user->getRoleNames() as $role )
                            <span class=" m-1 badge bg-primary">{{$role}}</span>
                            @empty
                            <span class=" m-1 badge bg-secondary">Not Assigned</span>
                            @endforelse
                        </td>
                        <td>
                            <a href="{{route('remove.role',$user->id)}}" class="btn btn-danger">Remove Role</a>

                            {{-- <a href="{{route('role.edit',$role->id)}}" class="btn btn-info">Edit</a> --}}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="cart mt-5">
            <div class="cart-header">
                <h3>Role List</h3>
            </div>
            <div class="cart-body mt-3">
                <table class="table table-bordered">
                    <tr>
                        <th>Role</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($roles as $role )
                    <tr>
                    {{-- <tr class="{{$role->name == 'Developer'? 'd-none':''}}" > --}}
                        <td>{{$role->name}}</td>
                        <td class="text-wrap">
                            @foreach ($role->getPermissionNames() as $permission )
                            <span class=" m-1 badge bg-primary">{{$permission}}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('role.delete',$role->id)}}" class="btn btn-danger">Delete</a>
                            <a href="{{route('role.edit',$role->id)}}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="cart">
            <div class="cart-header">
                <h3>Assign Role</h3>
            </div>
            <div class="cart-body mb-2">
                <form action="{{route('assign.role')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <select name="user_id" class="form-control" id="">
                            <option value="">Select User</option>
                            @foreach ($users as $user )

                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <select name="role" class="form-control" id="">
                            <option value="">Select Role</option>
                            @foreach ($roles as $role )

                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Assign Role</button>
                </form>
            </div>
        </div>





        <div class="cart mt-5 mb-2">
            <div class="cart-header">
                <h3>Add New Role</h3>
            </div>
            <div class="cart-body mt-2">
                <form action="{{route('role.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="rn" class="form-label">Role Name</label>
                        <input type="text" id="rn" name="role_name" class="form-control">
                    </div>

                    <div class="mb-3">
                        @foreach ($permissions as $permission )

                        <div class="form-check form-check-inline">
                            <input value="{{$permission->name}}" name="permission[]" type="checkbox" class="form-check-input" id="per{{$permission->id}}">
                            <label class="form-check-label ms-0" for="per{{$permission->id}}">{{$permission->name}}</label>
                        </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Add Role</button>
                </form>
            </div>
        </div>



        <div class="cart mt-5">
            <div class="cart-header">
                <h3>Add New Permission</h3>
            </div>
            <div class="cart-body mt-2">
                <form action="{{route('permission.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="pn" class="form-label">Permission Name</label>
                        <input type="text" id="pn" name="permission_name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-2">Add Permission</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
