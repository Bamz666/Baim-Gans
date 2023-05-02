
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star vendor</title>
  <link rel="stylesheet" href="{{ asset('vendor')}}/node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ asset('vendor')}}/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="{{ asset('vendor')}}/node_modules/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="{{ asset('vendor')}}/css/style.css" />
  <link rel="shortcut icon" href="{{ asset('vendor')}}/images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('vendor')}}/images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('vendor')}}/images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
       
       {{-- <button class="btn btn-danger">
        <a class="text-white" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
          logout
        </a>
      </button> --}}
    
    {{-- <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
  </form> --}}
    
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="{{ asset('vendor')}}/images/face.jpg" alt="">
            <p class="name">Muhammad Ibrahim</p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">
                <img src="{{ asset('vendor')}}/images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
                <img src="{{ asset('vendor')}}/images/icons/9.png" alt="">
                <span class="menu-title">Master Data<i class="fa fa-sort-down"></i></span>
              </a>
              <div class="collapse" id="sample-pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      Data Customer
                    </a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          @yield('konten')
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('vendor')}}/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('vendor')}}/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="{{ asset('vendor')}}/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('vendor')}}/node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="{{ asset('vendor')}}/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="{{ asset('vendor')}}/js/off-canvas.js"></script>
  <script src="{{ asset('vendor')}}/js/hoverable-collapse.js"></script>
  <script src="{{ asset('vendor')}}/js/misc.js"></script>
  <script src="{{ asset('vendor')}}/js/chart.js"></script>
  <script src="{{ asset('vendor')}}/js/maps.js"></script>
</body>

</html>
