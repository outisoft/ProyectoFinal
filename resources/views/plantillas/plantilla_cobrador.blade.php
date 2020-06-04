<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="/js/popper.js"></script>
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/axios.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="shortcut icon" href="{{ asset('iconos/icons8_Coins.ico') }}">

    <!--CKEditor Plugin-->
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>



</head>
<body>
        <nav class="navbar navbar-dark navbar-expand-lg navbar-light bg-dark flex-md-nowrap p-0 shadow">
            <div class="collapse navbar-collapse">
              <ul class="navbar-nav px-3">
                <li class="navbar-brand col-sm-3 col-md-2 mr-0">
                  <a class="nav-link"   href="/cobrador">INICIO</a>
                </li>
              </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 0 0 .014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 0 0 .022.004zm9.974.056v-.002.002zM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    </svg>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"   href="#">Configuracion</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>

                  </div>
              </li>
              </ul>
            </div>
        </nav>
        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" href="#">
                      <span data-feather="home"></span>
                      <p style="color:#ffffff">Dashboard</p> <span class="sr-only">(current)</span>
                    </a>
                  </li>
                  <li class="nav-item px-2 mt-2 mb-1 text-muted">
                    <a class="nav-link" href="/servicios">
                      <span data-feather="file"></span>
                      <p style="color:#ffffff"><img src="{{ asset('iconos/Accounting_96px.png') }}" width="40" height="40">Servicios</p>
                    </a>
                  </li>
                  <li class="nav-item px-1 mt-2 mb-1 text-muted">
                    <a class="nav-link" href="#">
                      <span data-feather="shopping-cart"></span>
                      <p style="color:#ffffff"><img src="{{ asset('iconos/UserGroup_96px.png') }}" width="40" height="40">Suscriptores</p>
                    </a>
                  </li>
                  <li class="nav-item px-1 mt-2 mb-1 text-muted">
                    <a class="nav-link" href="#">
                      <span data-feather="users"></span>
                      <p style="color:#ffffff"><img src="{{ asset('iconos/CardPayment_96px.png') }}" width="40" height="40">Pagos</p>
                    </a>
                  </li>
                  <li class="nav-item px-1 mt-2 mb-1 text-muted">
                    <a class="nav-link" href="#">
                      <span data-feather="bar-chart-2"></span>
                      <p style="color:#ffffff"><img src="{{ asset('iconos/Chat_96px.png') }}" width="40" height="40">Mensajes</p>
                    </a>
                  </li>
                </ul>
              </div>
            </nav>

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
</body>
@yield('codigo')
</html>
