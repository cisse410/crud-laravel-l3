<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
<body>

    <header>
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home') }}">E-Commerce</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"> Acceuil </a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('products.index') }}"> Produits </a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Administration
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="{{ route('admin-produit') }}">Produits</a></li>
                              <li><a class="dropdown-item" href="{{ route('admin-category') }}">Catégories</a></li>
                            </ul>
                          </li>
                        <li class="nav-item"><a class="nav-link" href="#"> A propos </a></li>
                    </ul>
                </div> <!-- navbar-collapse.// -->
            </div> <!-- container-fluid.// -->
        </nav>
    </header>

<main class="container">
    @yield('content')
</main>


<script>
    document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            document.getElementById('navbar_top').classList.add('fixed-top');
            // add padding top to show content behind navbar
            navbar_height = document.querySelector('.navbar').offsetHeight;
            document.body.style.paddingTop = navbar_height + 'px';
        } else {
            document.getElementById('navbar_top').classList.remove('fixed-top');
            // remove padding top from body
            document.body.style.paddingTop = '0';
        }
    });
    });
</script>
