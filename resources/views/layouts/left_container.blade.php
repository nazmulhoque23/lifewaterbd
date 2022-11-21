<!-- Brand Logo -->
<!-- <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->
<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
  <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
  <span class="brand-text font-weight-light">AdminLTE 3</span>
</a>
<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

  <!-- SidebarSearch Form -->
  <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

  <!-- Sidebar Menu -->
  <nav class="mt-2 hjk">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
            <!-- <i class="right fas fa-angle-left"></i> -->
          </p>
        </a>
      </li>

      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Setting
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">

          <li class="nav-item menu-open">
            <a href="{{route('users.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{route('categories.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Category
              </p>
            </a>
          </li>
          
          <li class="nav-item menu-open">
            <a href="{{route('products.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Products
              </p>
            </a>
          </li>

          <li class="nav-item menu-open">
            <a href="{{route('brands.index')}}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Brands
              </p>
            </a>
          </li>
        </ul>
      
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="" class="nav-link active">
            <i class="far fa-circle nav-icon"></i>
            <p>Summery</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Details</p>
          </a>
        </li>

      </ul>
      </li>
      <li class="nav-item menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Payment Info
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <!--<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collection Analytics</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Settlement Info</p>
                </a>
              </li>
            </ul>-->
      </li>
      <li class="nav-item menu-open">
        <a href="{{ route('logout') }}" class="nav-link"
          onclick="event.preventDefault();document.getElementById('frm-logout').submit();">
          <i class="far fa-circle nav-icon"></i>
          <p>Log out</p>
        </a>

        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}

        </form>
      </li>

    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->


<!-- Category -->

</ul>
</nav>
<!-- /.sidebar-menu -->
</div>


<!-- /.sidebar -->