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
    <title>Home page</title>
  </head>
  <body>

    @include('frontend.utils.header')

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

    @include('frontend.utils.tabproduct')
    <!-- tab end -->

    <!--Special product-->
    @include('frontend.utils.special')
    <!--new arrival product-->
    @include('frontend.utils.newarrival')
    <!-- featured product -->
    @include('frontend.utils.featured')

    <!-- info -->
    @include('frontend.utils.info')

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
    @include('frontend.utils.clients')

    <!-- footer -->
    @include('frontend.utils.footer')
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
