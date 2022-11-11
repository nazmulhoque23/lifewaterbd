<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <style>
        .dropdown .dropdown-menu {
            padding: 20px;
            top: 30px !important;
            width: 350px !important;
            left: -110px !important;
            box-shadow: 0px 5px 30px black;
        }
    </style>
</head>

<body>
    <div class="dropdown">
        <button type="button" class="btn btn-info" data-toggle="dropdown" style="background-color: #DAA520;">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{
                count((array) session('cart'.Auth::user()->id)) }}</span>
        </button>
        <div class="dropdown-menu">
            <div class="row total-header-section">
                <div class="col-lg-6 col-sm-6 col-6">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                        class="badge badge-pill badge-danger">{{ count((array) session('cart'.Auth::user()->id)) }}</span>
                </div>
                @php $total = 0 @endphp
                @foreach((array) session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                @endforeach
                <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                    <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                </div>
            </div>
            @if(session('cart'.Auth::user()->id))
            @foreach(session('cart'.Auth::user()->id) as $id => $details)
            <div class="row cart-detail">
                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                    <img src="frontend/images/products/{{ $details['image'] }}" style="width:50%; height:50%;" />
                </div>
                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                    <p>{{ $details['name'] }}</p>
                    <span class="price text-info"> ${{ $details['price'] }}</span> <span class="count"> Quantity:{{
                        $details['quantity'] }}</span>
                </div>
            </div>
            @endforeach
            @endif
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                    <a href="{{ route('cartview') }}" class="btn btn-primary btn-block"
                        style="background-color: #000000">View all</a>
                </div>
            </div>
        </div>
</body>

</html>