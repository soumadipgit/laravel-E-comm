@extends('login/master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6">
            <img class="col-sm-12 " src="{{$products['gallery']}}" alt="" height="500px" >
        </div>
        <div class="col-sm-6">
            <a href="/">Go back</a>
            <br>
            <br> 
            <h4>{{$products['name']}}</h4>
            <p>prices: {{$products['price']}}</p>  
            <p>Details: {{$products['description']}}</p>
            <p>Category :{{$products['category']}}</p>
            <br>
            <br>

        <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{$products['id']}}">
            <button class="btn btn-primary">Add to Cart</button>
        </form>          
         <br><br>
            <button class="btn btn-success">Buy Now</button>
        </div>
    </div>
</div>
@endsection