@extends('layouts.admin');


@section('content')
<h4 class="mb-3 mb-md-0">Welcome to Dashboard <strong class="text-success">{{Auth::user()->name}}</strong></h4>
@endsection
