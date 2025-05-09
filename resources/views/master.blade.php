<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Project</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>

</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .custom-login
    {
        height: 450px;
        padding-top: 100px;
    }
    img.slider-img
    {
        height: 250px !important;
    }
    .custom-product
    {
        height: 480px;
    }
    .slider-text
    {
        color: black;
        background-color: #1f7a9f1c !important;
    }
    .trending-img
    {
        height: 100px;
    }
    .trending-item
    {
        float: left;
        width: 20%;
    }
    .trending-wrapper
    {
        margin: 20px;
    }
    .detail-img
    {
        height: 200px;
    }
    .search-box
    {
        width: 500px;
    }
    .cart-list-divider
    {
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
    }        
</style>
</html>