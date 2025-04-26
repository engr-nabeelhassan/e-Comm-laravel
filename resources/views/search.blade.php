@extends('master') 
@section('content')
<div class="container d-flex flex-column min-vh-100 custom-product">  
    <div class="row flex-grow-1">
        <div class="col-sm-4 p-3">
            <a href="#">Filter</a>
        </div>
        <div class="col-sm-8">
            <div class="trending-wrapper">
                <h3>Search Results</h3>
                @foreach ($products as $item)
                    <div class="searched-item mb-3">
                        <a href="detail/{{$item['id']}}">
                            <img class="trending-img" src="{{ $item['gallery'] }}">
                            <div>
                                <h4>{{ $item['name'] }}</h4>
                                <h6>{{ $item['description'] }}</h6>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
