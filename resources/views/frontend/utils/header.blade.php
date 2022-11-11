
<section id="header_one">
  <div class="jisDk">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="{{route('home')}}" class="logo">
            <img src="{{asset('frontend/images/logo.png')}}" alt="Molla Logo" class="bg-transparent" width="130"
              height="30">
          </a>
        </div>
        <div class="col-md-6" style="margin-left:-40px;">
          <form>
            <div class="input-group mb-3" style="margin-left:-5px;">
              <input type="text" class="form-control" aria-label="Example text with button addon"
                aria-describedby="button-addon1" placeholder="Search Product">
              <button class="btn btn-outline-secondary" type="button" id="button-addon1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search"
                  viewBox="0 0 16 16">
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          <div class="row">
            @if(auth()->check())
            <div class="col-md-6">
              <li><a class="nav-link font-weight-bold" href="#"></i> {{Auth::user()->name}}:
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('frm-logout').submit();"><button
                      type="button" class="btn logreg">Logout</button></a>
                  <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
                  @include('frontend.utils.cartlayout');
              </li>
            </div>
            @else
            <div class="col-md-6">
              <!-- Button trigger modal -->
              <button type="button" class="btn logreg" data-bs-toggle="modal" data-bs-target="#logregModal">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>Login/Register
              </button>

              <div class="col-md-6">
                <div class="card-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart2"
                    viewBox="0 0 16 16">
                    <path
                      d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                  </svg>
                  <span class="count">0</span>
                </div>
              </div>
              @endif
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Login register Modal -->
    <div class="modal fade modal-right" id="logregModal" tabindex="-1" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">

                  @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>



              <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                  </button>


                </div>
              </div>
            </form>
            <div class="forget">
              <a href="#">Forgot Your Password?</a>
              <p class="or">or</p>
              <a href="{{route('register')}}" class="signin">create an account</a>
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
            <button class="btn btn-secondary catbtn dropdown-toggle" type="button" id="catbtn" data-bs-toggle="dropdown"
              aria-expanded="false">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
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
