<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="css\style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}
    {{-- <script src="https://unpkg.com/scrollreveal"></script> --}}
  </head>
  <body>
    <nav class="header navbar navbar-expand-lg ">
      <div class="container-fluid">
        <a class="navbar-brand" style="padding-left: 3rem; " href="#home"><img src="assets/LogoPrestige_NoBG.png" alt="" width="100px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="justify-content: right; padding-right:3rem" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active-link" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu2">Menu2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#menu3">Menu3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <nav class="main navbar-default">
        @yield('menuContainer')
    </nav>
    
    {{-- footer  --}}
    <footer class="footer">
      @yield('footer')
    </footer>
    
    <script src="js\script.js"></script>
    {{-- <script src="js/script.js"></script> --}}
    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}
    {{-- <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js\scrollreveal.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>