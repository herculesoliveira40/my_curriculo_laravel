<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" href="/img/logo2.png" sizes="32x32" type="image/png">
  <title>@yield('title')</title>
  <!-- CSS e JS Interno -->
  

  <!-- Boostrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  
  <!-- Icones Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
      <img src="/img/logo1.png" alt="" width="60" height="48">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> <i class="bi bi-sort-down"></i> </span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Cadastrar
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/users/create">Usuario</a></li>
            </ul>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/users/create">Curriculo</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              API
            </a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="/api/dashboard">dashboard</a> </li>
              <li> <a class="dropdown-item" href="/api/usuarios">Users Json</a> </li>
            </ul>
          </li>
        </ul>
        <a class="navbar-text" aria-current="page">
          <!-- Login -->
          @include('helpers.modal')
        </a>
      </div>
    </div>
  </nav>

</body>
<main>
  <div class="container-fluid">
    <div class="row">
      @if(session('mensagem'))
      <p class="alert alert-success">{{ session('mensagem') }}</p>

      @elseif(session('alerta'))
      <p class="alert alert-danger">{{ session('alerta') }}</p>
      @endif

      @yield('content')
    </div>
  </div>
</main>
<footer class="text-center bg-light text-info">
  <p> 2022 <a href="https://github.com/herculesoliveira40" target="_blank"> Shelby &copy;</a> </strong> </p>
</footer>
</body>
<script type="text/javascript" src="/js/script_modal.js"></script>

</html>