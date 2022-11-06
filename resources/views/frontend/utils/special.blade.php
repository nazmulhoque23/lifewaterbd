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
            @foreach($products as $product)
            @if($product->separation == "special offers")
            
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
            @endif
            @endforeach
          </div>
        </div>
      </div>
    </section>
