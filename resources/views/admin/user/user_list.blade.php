@extends('layouts.admin');

@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>User Information</h3>
            </div>
            <div class="card-body">
                @if (session('user_delete'))
                    <div class="alert alert-success">{{session('user_delete')}}</div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>NAME</th>
                        <th>EMAIl</th>
                        <th>PHOTO</th>
                        <th>ROLE</th>
                        <th>ACTION</th>
                    </tr>
                    @forelse ($user_info as $key=>$users )

                    <tr class="d-{{($users->role==100?'none':'')}}" >
                        <td>{{$key+1}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>
                            @if ($users->photo == null)
                            <img src="{{ Avatar::create($users->name)->toBase64() }}" />

                           @else
                           <img src="{{asset('uploads/user')}}/{{$users->photo}}" alt="">
                        @endif
                        </td>
                        <td>
                            <span class="badge badge-{{($users->role ==0?'primary':'')}}{{($users->role ==1?'success':'')}}{{($users->role ==2?'danger':'')}}{{($users->role ==3?'info':'')}}{{($users->role ==4?'warning':'')}}{{($users->role ==100?'dark':'')}}">
                                {{($users->role ==0?'Visitor':'')}}
                                {{($users->role ==1?'Super Admin':'')}}
                                {{($users->role ==2?'Admin':'')}}
                                {{($users->role ==3?'Modearetor':'')}}
                                {{($users->role ==4?'Editor':'')}}
                                {{($users->role ==100?'Developer':'')}}
                            </span>
                        </td>
                        <td>
                            <a href="{{route('user.delete' ,$users->id)}}" class="btn btn-danger btn-icon">
                                <i data-feather="trash"></i>
                            </a>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add New User</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
                <form action="{{route('user.add')}}" method="POST">
                    @csrf
                    <div class="form-check mb-2">
                        <label class="form-label">Name</label>
                        <input value="{{old('name')}}" type="text" class="form-control" name="name" id="">
                    </div>
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-check mb-2">
                        <label class="form-label">Email</label>
                        <input value="{{old('email')}}" type="email" class="form-control" name="email" id="">
                    </div>
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-check mb-2">
                        <label class="form-label">Password</label>
                        <input value="{{old('password')}}" type="password" class="form-control" name="password" id="">
                    </div>
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <div class="form-check mb-2">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="confirm_password" id="">
                    </div>
                    @if (session('match'))
                    <div class="alert alert-danger">{{session('match')}}</div>
                    @endif
                    @error('confirm_password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <div class="form-check mb-2">
                        <label class="form-label">Role</label>
                        <input type="number" value="0" maxlength="4" minlength="0" class="form-control" name="role" id="">
                    </div>
                    @error('role')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <button class="btn btn-primary" type="submit">Add new user</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
