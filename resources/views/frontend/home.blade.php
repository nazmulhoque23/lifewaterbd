<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.2/owl.carousel.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <section id="header_one">
        <div class="jisDk">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <a href="" class="logo">
                            <img src="{{asset('frontend/images/logo.png')}}" alt="Molla Logo" class="bg-transparent" width="130" height="30">
                        </a>
                    </div>
                    <div class="col-md-6">
                      <form>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control"  aria-label="Example text with button addon" aria-describedby="button-addon1" placeholder="Search Product">
                          <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="col-md-3">
                      <div class="row">
                        <div class="col-md-6">
                           <!-- Button trigger modal -->
                          <button type="button" class="btn logreg" data-bs-toggle="modal" data-bs-target="#logregModal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>Login/Register
                          </button>
                        </div>
                        <div class="col-md-6">
                          <div class="card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2" viewBox="0 0 16 16">
                              <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                            </svg>
                            <span class="count">0</span>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!-- Login register Modal -->
            <div class="modal fade modal-right" id="logregModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="mb-3 col-md-12">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3 col-md-12">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                      <div class="submit text-center">
                        <button type="submit" class="btn text-center">Submit</button>
                      </div>
                    </form>
                    <div class="forget">
                      <a href="#">Forgot Your Password?</a>
                      <p class="or">or</p>
                      <a href="#" class="signin">create an account</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="agHjo">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <div class="dropdown">
                  <button class="btn btn-secondary catbtn dropdown-toggle" type="button" id="catbtn" data-bs-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>Browse Categories
                  </button>
                  <ul class="dropdown-menu subcatul" aria-labelledby="catbtn">
                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Action</a>
                      <ul class="submenu">
                        <li><a href="" class="dropdown-item">Abcder</a></li>
                      </ul>
                    </li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
              <div class="col">
                <ul class="rightside">
                  <li><a href="" class="">Home</a></li>
                  <li><a href="" class="">Shop</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>

    <!-- carousel -->
    <section id="carousel">
      <div class="container">
        <div id="carouseloflifewater" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouseloflifewater" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouseloflifewater" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouseloflifewater" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="frontend/images/carousel-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="frontend/images/carousel-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="frontend/images/carousel-3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouseloflifewater" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouseloflifewater" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- carousel -->

    <!-- shop show -->
    <section id="shop">
      <div class="container">
        <div class="dJuyt text-center">
          <h2>Shop by Brands</h2>
        </div>
        <div class="imag">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="frontend/images/shop/puricon.jpg" alt="">
            </div>
            <div class="item">
              <img src="frontend/images/shop/aquapro.jpg" alt="">
            </div>
            <div class="item">
              <img src="frontend/images/shop/cnp.jpg" alt="">
            </div>
            <div class="item">
              <img src="frontend/images/shop/dow.jpg" alt="">
            </div>
            <div class="item">
              <img src="frontend/images/shop/nitto.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/easy.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/pureflow.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/edose.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/gazi.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/kalimati.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/heron.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/vontron.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- shop show end -->

    <!-- tab product show -->

    <section id="tab_pro">
      <div class="container">
        <div class="allbtn">
          <div class="w3-bar w3-black">
            <button class="w3-bar-item w3-button" onclick="openCity('Household')">
              Household
            </button>
            <button class="w3-bar-item w3-button" onclick="openCity('Commercial')">Commercial</button>
            <button class="w3-bar-item w3-button" onclick="openCity('Accessories')">Accessories</button>
          </div>
        </div>
        
        <div id="Household" class="w3-container city">
          <div class="owl-carousel-household owl-theme">
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/12.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/14.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/15-1.webp" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/17.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/18.webp" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/19.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/20.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/21.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/25.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/5.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/6-1.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/standard.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
          </div>
        </div>
        
        <div id="Commercial" class="w3-container city" style="display:none">
          <div class="owl-carousel-household owl-theme">
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/12.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/14.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/15-1.webp" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/17.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/18.webp" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/19.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/20.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/21.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/25.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/5.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/6-1.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/standard.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
          </div>
        </div>
        
        <div id="Accessories" class="w3-container city" style="display:none">
          <div class="owl-carousel-household owl-theme">
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/12.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/14.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="frontend/images/household/15-1.webp" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/17.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/18.webp" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/19.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/20.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/21.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/25.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/5.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/6-1.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
            <div class="item">
              <div class="product_top">
                <a href="">
                  <img src="/frontend/images/household/standard.jpg" alt="">
                </a>
              </div>
              <h3 class="p_title">abc dfer thsj</h3>
              <span class="price">৳600</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- tab end -->

    <!--Special product-->
    <section id="special">
      <div class="container">
        <div class="special_btn">
          <div class="special_title">
            <p>Special Offers</p>
          </div>
          <a href="" class="special_p_link">See All Products <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg></a>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="product">
              <figure class="figure">
                <a href="">
                  <img src="frontend/images/household/12.jpg" alt="" class="">
                </a>
              </figure>
              <div class="product-body" style="transform: translateY(0px);">
                <h3 class="product-title">Sanaky Hot & Cold</h3>
                <div class="product-price">
                  <span class="new-price">৳600</span>
                  <span class="old-price">৳800</span>
                </div>
              </div>
              <div class="product-footer" style="visibility: hidden;">
                <div class="rating-container">
                  <div class="rating">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                  </div>
                  <span class="rating-text">( 2 Review )</span>
                </div>
                <a href="" class="product-view">
                  <i class="bi bi-cart-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--new arrival product-->
    <section id="arrival">
      <div class="container">
        <div class="special_btn">
          <div class="special_title">
            <p>New Arrival</p>
          </div>
          <a href="" class="special_p_link">See All Products <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg></a>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="product">
              <figure class="figure">
                <a href="">
                  <img src="frontend/images/household/12.jpg" alt="" class="">
                </a>
              </figure>
              <div class="product-body" style="transform: translateY(0px);">
                <h3 class="product-title">Sanaky Hot & Cold</h3>
                <div class="product-price">
                  <span class="new-price">৳600</span>
                  <span class="old-price">৳800</span>
                </div>
              </div>
              <div class="product-footer" style="visibility: hidden;">
                <div class="rating-container">
                  <div class="rating">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                  </div>
                  <span class="rating-text">( 2 Review )</span>
                </div>
                <a href="" class="product-view">
                  <i class="bi bi-cart-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- featured product -->
    <section id="featured">
      <div class="container">
        <div class="special_btn">
          <div class="special_title">
            <p>Featured</p>
          </div>
          <a href="" class="special_p_link">See All Products <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
          </svg></a>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="product">
              <figure class="figure">
                <a href="">
                  <img src="frontend/images/household/12.jpg" alt="" class="">
                </a>
              </figure>
              <div class="product-body" style="transform: translateY(0px);">
                <h3 class="product-title">Sanaky Hot & Cold</h3>
                <div class="product-price">
                  <span class="new-price">৳600</span>
                  <span class="old-price">৳800</span>
                </div>
              </div>
              <div class="product-footer" style="visibility: hidden;">
                <div class="rating-container">
                  <div class="rating">
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                    <i class="bi bi-star"></i>
                  </div>
                  <span class="rating-text">( 2 Review )</span>
                </div>
                <a href="" class="product-view">
                  <i class="bi bi-cart-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- info -->
    <section id="info">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="xgYri">
              <div class="box-icon">
                <img src="frontend/images/shopping-cart-30x30.webp" alt="">
              </div>
              <div class="box-content">
                <p>Select Product</p>
                <p>From Many Categories.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="xgYri">
              <div class="box-icon">
                <img src="frontend/images/purchase-order-30x30.webp" alt="">
              </div>
              <div class="box-content">
                <p>Confirm Your Order.</p>
                <p>Select your Specification.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="xgYri">
              <div class="box-icon">
                <img src="frontend/images/money-30x30.webp" alt="">
              </div>
              <div class="box-content">
                <p>Easy Payment.</p>
                <p>Pay with Bank/Bkash/Nagad.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="xgYri">
              <div class="box-icon">
                <img src="frontend/images/truck-30x30.webp" alt="">
              </div>
              <div class="box-content">
                <p>Fast Delivery.</p>
                <p>From Many Categories.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- big project -->
    <section id="big-project-link">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="banner-wrapper">
              <div class="ghFtr">
                <div class="banner-img">
                  <a href="">
                    <img src="frontend/images/four/media-1024x409-2.webp" alt="">
                  </a>
                </div>
              </div>
              <div class="banner-content">
                <div class="banner-btn">
                  <a href="">Filter Media and Chemicals</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-wrapper">
              <div class="ghFtr">
                <div class="banner-img">
                  <a href="">
                    <img src="frontend/images/four/Effluent-Treatment-Plant.webp" alt="">
                  </a>
                </div>
              </div>
              <div class="banner-content">
                <div class="banner-btn">
                  <a href="">Effluent Treatment Plant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="ddf" style="height: 20px"></div>
        <div class="row">
          <div class="col-md-6">
            <div class="banner-wrapper">
              <div class="ghFtr">
                <div class="banner-img">
                  <a href="">
                    <img src="frontend/images/four/Iron-Removal-Plant.webp" alt="">
                  </a>
                </div>
              </div>
              <div class="banner-content">
                <div class="banner-btn">
                  <a href="">Iron Removal Plant</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="banner-wrapper">
              <div class="ghFtr">
                <div class="banner-img">
                  <a href="">
                    <img src="frontend/images/four/RO-Plant.webp" alt="">
                  </a>
                </div>
              </div>
              <div class="banner-content">
                <div class="banner-btn">
                  <a href="">Water Treatment Plant</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- our clients -->
    <section id="shop">
      <div class="container">
        <div class="dJuyt text-center">
          <h2>Our Clients</h2>
        </div>
        <div class="imag">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="frontend/images/shop/puricon.jpg" alt="">
            </div>
            <div class="item">
              <img src="frontend/images/shop/aquapro.jpg" alt="">
            </div>
            <div class="item">
              <img src="frontend/images/shop/cnp.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/dow.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/nitto.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/easy.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/pureflow.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/edose.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/gazi.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/kalimati.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/heron.jpg" alt="">
            </div>
            <div class="item">
              <img src="/frontend/images/shop/vontron.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer class="footer">
      <div class="footer-middle">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="widget widget-about">
                <a href="">
                  <img src="frontend/images/logo-footer.png" class="footer-logo" alt="Footer Logo" width="95" height="25">
                </a>
                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>
                <div class="social-icons">
                  <a href="#" class="social-icon" title="Facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="social-icon" title="Twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="social-icon" title="Instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="social-icon" title="Youtube"><i class="bi bi-youtube"></i></a>
                  <a href="#" class="social-icon" title="Pinterest"><i class="bi bi-pinterest"></i></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">Useful Links</h4>
                <ul class="widget-list">
                  <li><a href="">About Molla</a></li>
                  <li><a href="#">How to shop on Molla</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="">Contact us</a></li>
                  <li><a href="/react/molla/demo-22/pages/login/">Log in</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">CATEGORIES</h4>
                <ul class="widget-list">
                  <li><a href="">Household Water Purifier</a></li>
                  <li><a href="#">Industrial Water Plant</a></li>
                  <li><a href="#">Filter Media & Chemical</a></li>
                  <li><a href="">Commercial Water Purifier</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="widget">
                <h4 class="widget-title">CONTACT US</h4>
                <div class="wpb_wrapper">
                  <p><i class="fas fa-street-view"></i> Address:<br>House-1,Road-16,Section-10,Block-C,Mirpur,Dhaka-1216<br>Dhaka, Bangladesh 1216</p>
                  <p><i class="fas fa-phone"></i> Phone: +8801701-666606, 09638-888000, 0258052342</p>
                  <p><i class="fas fa-envelope"></i> Email: info@cleantechbd.net</p>            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <div class="container">
          <p>Copyright ©️ 2022 All right reserved - LifewaterBD || Developed By Fazlul</p>
        </div>
      </div>
    </footer>

    <!-- /////////////////END//////////////// -->




    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
    <!-- owl carousel -->
    <script>
      $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
          autoPlay: 3000, //Set AutoPlay to 3 seconds
          items: 6,
          itemsDesktop: [1199, 3],
          itemsDesktopSmall: [979, 3]
        });
      });
      $(document).ready(function() {
        $(".owl-carousel-household").owlCarousel({
          autoPlay: 5000, //Set AutoPlay to 3 seconds
          items: 5,
          itemsDesktop: [10, 100],
          itemsDesktopSmall: [10, 100]
        });
      });
    </script>
    <!-- tab script -->
    <script>

      let buttons = document.querySelectorAll(".w3-button");
      document.addEventListener("click", function(evt){
        if(evt.target.classList.contains("w3-button")){
          buttons.forEach(function(button){
            button.classList.remove("active");
          });
          evt.target.classList.add("active");
          
        }
      });


      function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";  
        }
        document.getElementById(cityName).style.display = "block";  
      }
    </script>
  </body>
</html>
