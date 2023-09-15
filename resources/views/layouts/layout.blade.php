
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>A-maze</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-bottom/">

    

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

<!--<script src="https://cdn.tailwindcss.com"></script>-->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .bg-maze {
        background-color: #5e2584 !important;
      }
      .list-group-item.active {
        z-index: 2;
        color: #333;
        background-color: #fff !important;
        border-color: #fff;
        border-bottom: 2px solid #dfdfdf;
      }

      .list-group-item.active:hover {
        background-color: #efefef !important;
        border-color: #fff;
      }

      .list-group-item.active:first-child {
        z-index: 2;
        color: #fff;
        background-color: #5e2584 !important;
        border-color: #5e2584;
      }
      .btn-primary {
        color: #fff;
        background-color: #5e2584 !important;
        border-color: #5e2584;
      }

      .btn-primary:hover {
        background-color: #4d1e6d !important;
        border-color: #4d1e6d;
      }

      .border-top {
          border-top: 1px solid #666 !important;
      }
      .mylnk:hover
      {
        text-decoration: none !important;
      }
      .marg-btm
      {
        margin-bottom: 2em;
      }
      .a-auth{
        color: #5e2584 !important;
      }
      .ml-2-mmt-2{
          margin-left: 1em;
      }
      .mobile-only
      {
        display: none;
      }
        @media screen and (max-width:800px){
            .ml-2-mmt-2{
            margin-left: 0em;
            margin-top: 1em;
          }
          .mobile-none
          {
            display: none;
          }
          .mobile-only
          {
            display: block;
          }
        }
      </style>

    
  </head>
  <body>

    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-maze">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="{{asset('img/logo-3-sml.png')}}" class="img" height="80"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Art</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Artist</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="/articles" id="dropdown10" data-bs-toggle="dropdown" aria-expanded="false">Article</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown10">
                <li><a class="dropdown-item" href="/articles/categories/techy art">Techy Art</a></li>
                <li><a class="dropdown-item" href="/articles/categories/graphic design">Graphic Design</a></li>
                <li><a class="dropdown-item" href="/articles/categories/visual art">Visual Art</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
<main class="container" style="margin: 15em auto;">
    
    @yield('content')

</main>




<footer class="py-5 footer bg-dark text-light">
    <div class="container">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <h5>Subscribe to our newsletter</h5>
              <p>Monthly digest of what's new and exciting from us.</p>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                <button class="btn btn-primary ml-2-mmt-2" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2023 A-Maze, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
        </div>
    </div>
    </footer>

    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

      
  </body>
</html>
