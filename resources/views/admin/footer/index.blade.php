@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Footer 1 Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Logo</th>
                        <th>Description</th>
                        <th>FB link</th>
                        <th>TW link</th>
                        <th>Li link</th>
                        <th>IG link</th>
                    </tr>

                    <tr>
                        <td ">
                            <img src="{{asset('uploads/footer/logo')}}/{{ $footer1s->image}}" width="100" alt="">
                        </td>

                        <td title="{{$footer1s->desp}}">{{substr($footer1s->desp,0,20).'...'}}</td>
                        <td title="{{$footer1s->facebook}}">{{substr($footer1s->facebook,0,15).'...'}}</td>
                        <td title="{{$footer1s->twitter}}">{{substr($footer1s->twitter,0,15).'...'}}</td>
                        <td title="{{$footer1s->linkedin}}">{{substr($footer1s->linkedin,0,15).'...'}}</td>
                        <td title="{{$footer1s->instagram}}">{{substr($footer1s->instagram,0,15).'...'}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Update Footer 1</h3>
            </div>
            <div class="card-body">
                <form action="{{route('footer1', $footer1s->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Logo</label>
                        <input type="file" name="image" class="form-control" id="" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                        <img id="logo" width="150" src="{{asset('uploads/footer/logo')}}/{{ $footer1s->image}}" alt="">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="desp" value="{{$footer1s->desp}}" class="form-control" id="">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Facebook Link</label>
                        <input type="text" name="facebook" class="form-control" value="{{$footer1s->facebook}}" id="">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Twitter Link</label>
                        <input type="text" name="twitter" class="form-control" value="{{$footer1s->twitter}}" id="">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">LinkedIn Link</label>
                        <input type="text" name="linkedin" class="form-control" value="{{$footer1s->linkedin}}" id="">
                    </div>

                    <div class="form-check">
                        <label for="" class="form-label">Instagram Link</label>
                        <input type="text" name="instagram" class="form-control" value="{{$footer1s->instagram}}" id="">
                    </div>

                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Update Footer 1</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row mt-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Footer 2 Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Email</th>
                        <th>Contact 1</th>
                        <th>Contact 2</th>
                        <th>Address</th>

                    </tr>

                    <tr>

                        <td title="{{$footer2s->email}}">{{$footer2s->email}}</td>
                        <td title="{{$footer2s->number1}}">{{$footer2s->number1}}</td>
                        <td title="{{$footer2s->number2}}">{{$footer2s->number2}}</td>
                        <td title="{{$footer2s->address}}">{{$footer2s->address}}</td>

                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Update Footer 2</h3>
            </div>
            <div class="card-body">
                <form action="{{route('footer2' , $footer2s->id)}}" method="POST" >
                    @csrf



                    <div class="form-check">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" value="{{$footer2s->email}}" class="form-control" id="">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Conatct Number 1</label>
                        <input type="text" name="number1" value="{{$footer2s->number1}}" class="form-control" id="">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Conatct Number 2</label>
                        <input type="text" name="number2" value="{{$footer2s->number2}}" class="form-control" id="">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Address</label>
                        <input type="cn2" name="address" value="{{$footer2s->address}}" class="form-control" id="">
                    </div>



                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Update Footer 2</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="row mt-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Footer 3 Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Tags</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($footer3s as $sl=>$footer3 )

                    <tr>
                        <td>{{$sl+1}}</td>
                        <td>{{$footer3->tags}}</td>
                        <td>{{$footer3->link}}</td>
                        <td>
                            <a href="{{route('footer3.delete' , $footer3->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Add Footer 3</h3>
            </div>
            <div class="card-body">
                <form action="{{route('footer3')}}" method="POST">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control">
                    </div>
                    <div class="form-check">
                        <label for="" class="form-label">Link</label>
                        <input type="text" name="link" class="form-control">
                    </div>
                    <div class="form-check">
                        <button type="submit" class="btn btn-primary">Add Footer 3</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Footer 4 Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($footer4s as $sl=>$footer )
                    <tr>

                        <td>{{$sl+1}}</td>
                        <td>
                            <img src="{{asset('uploads/footer/instagram')}}/{{ $footer->photo}}" alt="">
                        </td>
                        <td>
                            <a href="{{route('footer4.delete',$footer->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Add Footer 4</h3>
            </div>
            <div class="card-body">
                <form action="{{route('footer4')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="from-check">
                        <label for="" class="form-label">Image</label>
                        <input type="file" name="insta_image" id="" class="form-control" onchange="document.getElementById('f4').src = window.URL.createObjectURL(this.files[0])">
                        <img src="" width="150" alt="" id="f4">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Add Footer4</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Copyright Info</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Copyright</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        @foreach ($copyright as $copy)
                        <td>{{$copy->copyright}}</td>

                        @endforeach
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h3>Update Copyright</h3>
            </div>
            <div class="card-body">
                <form action="{{route('copyright' , $copyright->first()->id)}}" method="POST">
                    @csrf
                    <div class="form-check">
                        <label for="" class="form-label">Copyright</label>
                        <input value="{{$copyright->first()->copyright}}" type="text" name="copy" id="" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Copyright</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
