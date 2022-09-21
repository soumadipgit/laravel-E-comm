@extends('login/master')
@section('content')
<div class="container">
    <div class="row">
        <div class="mt-4 mb-4 ">    
            <div class="col-md-8" >
                <div class="card shadow">
                  <div class="card-canta">
                      <form class="p-4" action="login" method="post">
                        @csrf
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3 form-check">
                            <label class="form-check-label" for="exampleCheck1"><a href="http://">forgot password </a></label>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                  </div>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection