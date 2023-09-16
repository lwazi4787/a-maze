
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Amaze Margazin</title>

    <link rel="canonical" href="img/logo-3-sml.png">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Favicons -->
<link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
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
        //text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
      .logo
      {
        //width: 10%;
      }
      .nav-link
      {
        color: #fff;
      }
      .nav-link:hover
      {
        color: #666;
      }
      body
      {
        background: #5e2584 !important;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .marg-btm
      {
        margin-bottom: 2em;
      }

      nav a:hover
      {
        text-decoration: none;
      }


      /*--------------------------------------------------------------
      # Navigation Menu
      --------------------------------------------------------------*/
      /**
      * Desktop Navigation 
      */
      .navbar {
        padding: 0;
        text-align: center;
      }

      .navbar ul {
        margin: 0;
        padding: 0;
        display: flex;
        list-style: none;
        align-items: center;
      }

      .navbar li {
        position: relative;
      }

      .navbar a,
      .navbar a:focus {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0 10px 30px;
        font-size: 15px;
        font-weight: 500;
        color: #fff;
        white-space: nowrap;
        transition: 0.3s;
      }

      .navbar a i,
      .navbar a:focus i {
        font-size: 12px;
        line-height: 0;
        margin-left: 5px;
      }

      .navbar a:hover,
      .navbar .active,
      .navbar .active:focus,
      .navbar li:hover>a {
        color: #ffc107;
      }

      .navbar .getstarted,
      .navbar .getstarted:focus {
        padding: 8px 20px;
        margin-left: 30px;
        border-radius: 50px;
        color: #fff;
        font-size: 14px;
        border: 2px solid #ffc107;
        font-weight: 600;
      }

      .navbar .getstarted:hover,
      .navbar .getstarted:focus:hover {
        color: #fff;
        background: #ffc107;
      }

      .navbar .dropdown ul {
        display: block;
        position: absolute;
        left: 14px;
        top: calc(100% + 30px);
        margin: 0;
        padding: 10px 0;
        z-index: 99;
        opacity: 0;
        visibility: hidden;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
        transition: 0.3s;
        border-radius: 4px;
      }

      .navbar .dropdown ul li {
        min-width: 200px;
      }

      .navbar .dropdown ul a {
        padding: 10px 20px;
        font-size: 14px;
        text-transform: none;
        font-weight: 500;
        color: #0c3c53;
      }

      .navbar .dropdown ul a i {
        font-size: 12px;
      }

      .navbar .dropdown ul a:hover,
      .navbar .dropdown ul .active:hover,
      .navbar .dropdown ul li:hover>a {
        color: #ffc107;
      }

      .navbar .dropdown:hover>ul {
        opacity: 1;
        top: 100%;
        visibility: visible;
      }

      .navbar .dropdown .dropdown ul {
        top: 0;
        left: calc(100% - 30px);
        visibility: hidden;
      }

      .navbar .dropdown .dropdown:hover>ul {
        opacity: 1;
        top: 0;
        left: 100%;
        visibility: visible;
      }

      @media (max-width: 1366px) {
        .navbar .dropdown .dropdown ul {
          left: -90%;
        }

        .navbar .dropdown .dropdown:hover>ul {
          left: -100%;
        }
      }

      /**
      * Mobile Navigation 
      */
      .mobile-nav-toggle {
        color: #fff;
        font-size: 28px;
        cursor: pointer;
        display: none;
        line-height: 0;
        transition: 0.5s;
      }

      .mobile-nav-toggle.bi-x {
        color: #fff;
      }

      @media (max-width: 991px) {
        .mobile-nav-toggle {
          display: block;
        }

        .navbar ul {
          display: none;
        }
      }

      .navbar-mobile {
        position: fixed;
        overflow: hidden;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        background: rgba(50, 0, 50, 0.9);
        transition: 0.3s;
        z-index: 999;
      }

      .navbar-mobile .mobile-nav-toggle {
        position: absolute;
        top: 15px;
        right: 15px;
      }

      .navbar-mobile ul {
        display: block;
        position: absolute;
        top: 55px;
        right: 15px;
        bottom: 15px;
        left: 15px;
        padding: 10px 0;
        border-radius: 10px;
        background-color: #fff;
        overflow-y: auto;
        transition: 0.3s;
      }

      .navbar-mobile a,
      .navbar-mobile a:focus {
        padding: 10px 20px;
        font-size: 15px;
        color: #37517e;
      }

      .navbar-mobile a:hover,
      .navbar-mobile .active,
      .navbar-mobile li:hover>a {
        color: #5e2584;
      }

      .navbar-mobile .getstarted,
      .navbar-mobile .getstarted:focus {
        margin: 15px;
        color: #37517e;
      }

      .navbar-mobile .dropdown ul {
        position: static;
        display: none;
        margin: 10px 20px;
        padding: 10px 0;
        z-index: 99;
        opacity: 1;
        visibility: visible;
        background: #fff;
        box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
      }

      .navbar-mobile .dropdown ul li {
        min-width: 200px;
      }

      .navbar-mobile .dropdown ul a {
        padding: 10px 20px;
      }

      .navbar-mobile .dropdown ul a i {
        font-size: 12px;
      }

      .navbar-mobile .dropdown ul a:hover,
      .navbar-mobile .dropdown ul .active:hover,
      .navbar-mobile .dropdown ul li:hover>a {
        color: #5e2584;
      }

      .navbar-mobile .dropdown>.dropdown-active {
        display: block;
        visibility: visible !important;
      }

      .myhero
      {
        width: 95%;
        margin: auto;
        margin-top: 8em;
        margin-left: 6em;
        text-align: justify;

        /*position: absolute;
        top: 30%;
        left: 60%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;*/
      }
      .myhero p
      {
        text-align: left;
      }
      .hero-img
      {
        max-width: 75%;
      }

       @media (min-width: 1560px) {
            .stock-product-card img
            {
                max-width: 60%;
            }

            .stock-product-card
            {
                width: 70%;
            }


            .myhero
            {
              width: 80%;
              margin: auto;
              margin-top: 10em;
              margin-left: 24em;
              text-align: justify;

              /*position: absolute;
              top: 30%;
              left: 60%;
              transform: translate(-50%, -50%);
              text-align: center;
              color: #fff;*/
            }
            .myhero p
            {
              text-align: left;
            }
        }

        @media screen and (max-width:800px){

           .myhero
            {
              width: 100%;
              margin: auto;
              margin-top: 3em;
              margin-left: 1em;
              text-align: left;

              /*position: absolute;
              top: 30%;
              left: 60%;
              transform: translate(-50%, -50%);
              text-align: center;
              color: #fff;*/
            }

        }
        .footer-links
        {
          padding: 2em;
          margin: 4em auto;
        }
        .footer-links h4
        {
          margin-bottom: 2em;
        }
        .footer-links ul li
        {
          margin-bottom: .5em;
          color: #ad8f37;
        }
        .footer
        {
          text-align: left;
          border-top: 2px solid #4d1e6d;
          //box-shadow: 20px 20px 50px 15px #4d1e6d;
        }
        .my-bg {
          background-image: url(img/Making art-rafiki.png) !important; /* URL to your background image */
          background-color: linear-gradient(#5e2584, #ffc107, #5e2584) !important; /* Your background color in hexadecimal, RGB, or other color format */
          background-repeat: no-repeat; /* Specify whether the background image should repeat */
          background-size: cover; /* Adjust the size of the background image */
          /* You can add more background properties here as needed */
        }
        .heading
        {
          margin-bottom: 4em;
        }
        .border-top {
          border-top: 1px solid #666 !important;
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

    
    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="h-100 text-center text-white">
    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <!--<header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0"><img src="img/logo-3-sml.png" class="logo"></h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">Articles</a>
        <a class="nav-link" href="#">Meet The Artist</a>
        <a class="nav-link" href="#">Download Our Latest Issue</a>
      </nav>
    </div>
  </header>-->

  <div class="container d-flex align-items-center">
    <a href="index.html"><img src="img/logo-3-sml.png" class="img" height="150"></a>
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
        <li><a class="nav-link scrollto" href="#about">About</a></li>
        <!--<li><a class="nav-link scrollto" href="#services">Articles</a></li>-->
        <li><a class="nav-link   scrollto" href="#portfolio">Art</a></li>
        <li><a class="nav-link scrollto" href="#team">Artist</a></li>
        <li class="dropdown"><a href="/articles"><span>Articles</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/articles/categories/visual art">Visual Art</a></li>
            <li class="dropdown"><a href="/articles/categories/techy art"><span>Techy Art</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="#">Game Design</a></li>
                <li><a href="#">Animation</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">UX/UI Design</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>
              </ul>
            </li>
            <li><a href="/articles/categories/graphic design">Graphic Design</a></li>
            <li><a href="/articles/categories/video editing">Video Editing</a></li>
            <li><a href="/articles/categories/graphic illustrations">Graphic Illustration</a></li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        @auth
          <li><a class="nav-link scrollto" href="/articles/create">Add Article</a></li>
          <li style="margin-left: 2em;" class="text-warning mobile-none"><b>Welcome {{auth()->user()->name}}</b></li>
          <form method="post" action="/logout">@csrf<li><input type = 'submit' value = 'Logout' class="getstarted scrollto" href="/articles/create" style="background: rgba(255, 255, 255, 0); cursor: pointer;"></li></form>
        @else
          <li><a class="getstarted scrollto" href="/register">Register</a></li>
        @endauth
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
  </div>

  <main class="px-3">
    <div class="row">
        <div class="col-md-6">
          <div class="myhero">
            <h1>A-MAZE MAGAZINE</h1>
            <p class="lead">A-Maze Magazine is dedicated to creating a usable road map for all creatives in finding their way through the Art World Maze.</p><br>
              <a href="#" class="btn btn-lg btn-warning">Learn more</a>
            </div>
        </div>

        <div class="col-md-6">
            <img src="img/Making art-cuate.png" class="mobile-none hero-img">
        </div>
    </div>
  </main>



  <footer class="mt-auto text-white-50">
    <p><a href="https://getbootstrap.com/" class="text-white"></a> <a href="https://twitter.com/mdo" class="text-white"></a>...</p>
  </footer>
</div>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="heading">
          <h3 class="display-4 text-dark">Latest Articles</h3>
      </div>

      <div class="row">


        @foreach($articles as $article)
          <div class="col-md-4 marg-btm">
            <a href="/articles/{{$article->id}}">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="425" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false" src="{{ asset('storage/'.$article->img) }}" alt="img/apa-yang-di-laravel-dan-ekosistem-nya-m19vjr.webp">
              

              <div class="card-body">
                <h3 class="text-dark">{{$article->Title}}</h3></a>
                <!--<p class="card-text text-dark" style="text-align: justify;">{{$article->Description}}</p>-->
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <!--<button type="button" class="btn btn-sm btn-outline-secondary">View</button>-->

                  </div>
                  <small class="text-muted">{{ $article->created_at->diffForHumans() }}</small>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  </div>

    <footer class="py-5 footer bg-dark">
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
                <button class="btn btn-warning ml-2-mmt-2" type="button">Subscribe</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>&copy; 2023 A-Maze, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="link-light" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
          </ul>
        </div>
    </div>
    </footer>

    <!-- Vendor JS Files -->
    <script src="vendor/aos/aos.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>
    <script src="vendor/waypoints/noframework.waypoints.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/js/main.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>
