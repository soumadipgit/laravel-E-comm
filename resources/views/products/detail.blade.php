@extends('login/master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img src="{{$products['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <p>{{$products['name']}}</p>
            <p><p>{{$products['description']}}</p></p>
        </div>
    </div>
</div>
@endsection