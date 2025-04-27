@extends('master') 
@section('content')
<div class="container d-flex flex-column min-vh-100 custom-product">  
    <div class="row flex-grow-1">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h3>All Order List</h3>
                @foreach ($orders as $item)
                    <div class="row searched-item mb-3 cart-list-divider">
                        <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img class="trending-img" src="{{ $item->gallery }}">
                        </a>
                        </div>
                        <div class="col-sm-4">
                            <div>
                                <h4>Name : {{ $item->name }}</h4>
                                <h6>Delivery : {{ $item->status }}</h6>
                                <h6>Address : {{ $item->address }}</h6>
                                <h6>Payment Status : {{ $item->payment_status }}</h6>
                                <h6>Payment Method : {{ $item->payment_method }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
