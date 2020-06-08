<body>

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
    <li class="navbar-brand col-sm-3 col-md-3 mr-0">
      <a class="nav-link"   href="/cobrador">INICIO</a>
    </li>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

      <!-- Nav Item - Search Dropdown (Visible Only XS) -->
      <li class="nav-item dropdown no-arrow d-sm-none">
        <li class="nav-item px-2 mt-2 mb-1 text-muted   text-gray-100">
          <a class="nav-link" href="/servicios">
            <span data-feather="file"></span>
            <p style="color:#text-gray-400"><img src="{{ asset('iconos/Accounting_96px.png') }}" width="30" height="30">Servicios</p>
          </a>
        </li>
        <li class="nav-item px-1 mt-2 mb-1 text-muted">
          <a class="nav-link" href="/versuscriptor">
            <span data-feather="shopping-cart"></span>
            <p style="color:#text-gray-400"><img src="{{ asset('iconos/UserGroup_96px.png') }}" width="30" height="30">Suscriptores</p>
          </a>
        </li>
        <li class="nav-item px-1 mt-2 mb-1 text-muted">
          <a class="nav-link" href="/error-404">
            <span data-feather="users"></span>
            <p style="color:#text-gray-400"><img src="{{ asset('iconos/CardPayment_96px.png') }}" width="30" height="30">Pagos</p>
          </a>
        </li>
        <li class="nav-item px-1 mt-2 mb-1 text-muted">
          <a class="nav-link" href="/error-404">
            <span data-feather="bar-chart-2"></span>
            <p style="color:#text-gray-400"><img src="{{ asset('iconos/Chat_96px.png') }}" width="30" height="30">Mensajes</p>
          </a>
        </li>
      </li>
      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
          <img class="img-profile rounded-circle" src="{{ asset('iconos/User_96px.png') }}" width="30" height="30">
        </a>

        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Settings
          </a>
          <a class="dropdown-item" href="#">
            <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
              Activity Log
          </a>
          <div class="dropdown-divider"></div>
          <div class="dropdown-item" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </div>
      </li>
    </ul>
  </nav>

  <!-- End of Topbar -->
  <div class="container-fluid">
    <div class="row">
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">
            {{ Auth::user()->name }} {{ Auth::user()->last_name }} [{{ Auth::user()->email }}]<span class="caret"></span>
          </h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
        <div class="container">
          @yield('content')
        </div>
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
      </main>
    </div>
  </div>
  @yield('js_post_page')

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>
