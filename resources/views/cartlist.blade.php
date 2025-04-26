@extends('master') 
@section('content')
<div class="container d-flex flex-column min-vh-100 custom-product">  
    <div class="row flex-grow-1">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>Cart Results</h3>
                <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
                @foreach ($products as $item)
                    <div class="row searched-item mb-3 cart-list-divider">
                        <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{ $item->gallery }}">
                        </a>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h4>{{ $item->name }}</h4>
                                <h6>{{ $item->description }}</h6>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Item Cart</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>

        </div>
    </div>
</div>
@endsection
