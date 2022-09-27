@extends('login/master')
@section('content')
    <div class="contener">
        <div class="row mt-5">
            <div class="d-flex justify-content-center align-items-center container">
                <div class="card py-5 px-3 shadow p-3 mb-5 bg-white rounded">
                    <h2>Verification</h2>
                    {{$name}}
                    {{$email}}
                    <p class="text-danger" style="font-size:20px">cheak your email</p>
                    <form action="{{route('emailverify')}}" class="form-group" method="POST">
                        @csrf
                        <div class="m-2 p-2">
                            <input type="hidden" name="email" value="{{$email}}">
                            <input type="text" name="otp" placeholder="Enetr your otp">
                        </div>
                        <button type="submit" value="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
