<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Single Product page</title>
</head>

<body>
    @include('frontend.utils.header')

    <div class="container">
        <div class="row">
            <div class="card" style="display:flex; justify-content:flex;margin-top: 20px; width:50%; height:300%;">
                <img src="frontend/images/products/{{$product->image}}" style="width: 100%; height:100%;">
            </div>

            <div class="card" style="display:flex; justify-content:flex;margin-top: 20px; width:50%; height:300%;">

                <p style="font-size: 14px; margin-top:10px; margin-left:15px; font-weight:200">home/
                    {{$product->category->category->cat_name}}/ {{$product->category->name}}/ {{$product->name}}</p>
                <p style="margin-left:20px; margin-top:20px; font-weight:700; font-size:30px;"><b>
                        {{$product->name}}</b>
                </p>

                <p style="margin-left:20px; margin-top:20px; font-size:27px; font-weight:700; color:blue;">
                    <img src="frontend/images/tk.jpeg" style="width:7%; height:7%" alt="">{{$product->price}}
                </p>
                <p style="margin-left:20px; margin-top:10px; font-size:15px; font-weight:700;">
                    {{$product->summary}}</p>
                <table style="width:96%;  margin-left:10px; font-weight:700; font-size:20px;"
                    class="table table-striped">
                    <tr>
                        <td>Brand</td>
                        <td style="text-align: right; font-weight:normal;">{{$product->brand->name}}</td>

                    </tr>
                    <tr>
                        <td>Origin</td>
                        <td style="text-align: right; font-weight:normal;">{{$product->origin}}</td>

                    </tr>
                    <tr>
                        <td>Capacity</td>
                        <td style="text-align: right; font-weight:normal;">{{$product->capacity}}</td>

                    </tr>
                    <tr>
                        <td>Membrane</td>
                        <td style="text-align: right; font-weight:normal;">{{$product->membrane}}</td>

                    </tr>
                    <tr>
                        <td>Dimension</td>
                        <td style="text-align: right; font-weight:normal;">{{$product->dimension}}</td>

                    </tr>
                    <tr>
                        <td>Technology</td>
                        <td style="text-align: right; font-weight:normal;">{{$product->technology}}</td>

                    </tr>

                </table>
                <button type="button" class="btn btn-dark"
                    style="backgroung-color:green; width:30%; margin-left:20px; margin-bottom:10px;">EMI Bank
                    Details</button>

                <div class="row">
                    <!--<table class="table table-bordered" style="width:10%; margin-left:20px;">
                        <tr>
                            <td><button type="submit"><i class="material-icons">&#xe15b;</i></button></td>
                            <td>1</td>
                            <td><button type="submit"><i class="bi bi-plus"></i></button></td>


                        </tr>
                    </table>-->
                    <a href = "{{route('addtocart', $product->id)}}" class="btn btn-warning"
                        style=" width:30%; margin-left:20px; margin-bottom:10px;" role= "button">Add to Cart</a>
                    <button type="button" class="btn btn-dark"
                        style=" width:30%; margin-left:20px; margin-bottom:10px;">Buy Now</button>
                </div>

                <p style="margin-left: 20px; margin-top:10px;"> Call for Order: 017123456779</p>
                <p>_____________________________________________________________________________</p>
                <p style="font-size:15px; margin-left:20px;"> <b>Categories: </b>
                    {{$product->category->category->cat_name}},{{$product->category->name}},{{$product->features}}</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3" style="margin-top: 20px; margin-left:20px;">
                <img src="/frontend/images/truck-30x30.webp" alt="">
                <p><b>Delivery Info</b></p>
                <p>Delivery Time: 3-5 Working Days</p>
                <p>Shipping Charge: <b>Tk 60</b></p>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                <img src="/frontend/images/money-30x30.webp" alt="">
                <p><b>Cash On Delivery Available</b></p>
                <div class="container">
                    <img src="/frontend/images/Master-card.webp" alt="">
                    <img src="/frontend/images/Amex.webp" alt="">
                    <img src="/frontend/images/bKash.webp" alt="">
                    <img src="/frontend/images/Visa.webp" alt="">
                </div>
            </div>

            <div class="col-md-3" style="margin-top: 20px;">
                <img src="/frontend/images/return-30x30.webp" alt="">
                <p><b>Return And Warranty</b></p>
                <p>7 Days Return</p>
                <p>{{$product->warranty}}</p>
            </div>
        </div>

    

       @include('frontend.utils.tab')
    
    
    </div>
    <br/>
    <br/>
    




    <!-- footer -->
    @include('frontend.utils.footer')
    <!-- /////////////////END//////////////// -->




    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.js"></script>

    <script>
        $('.dropdown-submenu').hover( function() {
        $('.submenu').toggle();
      });  
      $(document).ready(function(){
      $('.rightside li a').click(function() {
          $(this).siblings('a').removeClass('active');
          $(this).addClass('active');
          });
      });    
    </script>

</body>

</html>