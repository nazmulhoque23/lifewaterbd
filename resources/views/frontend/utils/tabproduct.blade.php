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
        @foreach($products as $product)
        @if($product->category->category->cat_name == 'Household')
        <div class="item">
          <div class="product_top">
            <a href="{{route('productview', $product->id)}}">
              <img src="frontend/images/products/{{$product->image}}" alt="">
            </a>
          </div>
          <h3 class="p_title">{{$product->name}}</h3>
          <span class="price">${{$product->price}}</span>
        </div>

        @endif
        @endforeach

      </div>
    </div>

    <div id="Commercial" class="w3-container city" style="display:none">
      <div class="owl-carousel-household owl-theme">
        <!-- from here for loop to bring all products from DB-->
        @foreach($products as $product)
        @if($product->category->category->cat_name == 'Commercial')
        <div class="item">
          <div class="product_top">
            <a href="{{route('productview', $product->id)}}">
              <img src="frontend/images/products/{{$product->image}}" alt="">
            </a>
          </div>
          <h3 class="p_title">{{$product->name}}</h3>
          <span class="price">{{$product->price}}</span>
        </div>

        @endif
        @endforeach
      </div>
    </div>

    <div id="Accessories" class="w3-container city" style="display:none">
      <div class="owl-carousel-household owl-theme">
        <!-- from here for loop to bring all products from DB-->
        @foreach($products as $product)
        @if($product->category->category->cat_name == 'Accessories')
        <div class="item">
          <div class="product_top">
            <a href="{{route('productview', $product->id)}}">
              <img src="frontend/images/products/{{$product->image}}" alt="">
            </a>
          </div>
          <h3 class="p_title">{{$product->name}}</h3>
          <span class="price">{{$product->price}}</span>
        </div>

        @endif
        @endforeach
      </div>
    </div>
  </div>
</section>