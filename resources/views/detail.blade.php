@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{ $product['gallery'] }}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <br><br>
            <h3>Name : {{$product['name']}}</h3>
            <h6>Price : {{$product['price']}}</h6>
            <h6>Category : {{$product['category']}}</h6>
            <p>Description : {{$product['description']}}</p>
            <br>
            <form action="/add_to_cart" method="post">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
            <button class="btn btn-success">Add To Cart</button>
            </form>
            <br><br>
            <button class="btn btn-primary">Buy Now</button>
            <br><br>
        </div>
    </div>
</div>
@endsection 