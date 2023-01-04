<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <title>Home - My Blog</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

        <style>
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        </style>

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

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>

        <!-- End Custom styles for this template -->
        <link href="assets/css/headers.css" rel="stylesheet">
    </head>
    <body>


    <header class="p-3 border-bottom">
        <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
            <img class="bi me-2 rounded-circle shadow" src="assets/images/blog_php5_logo.webp" width="60" height="52" style="object-fit: cover;">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Accueil</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Articles</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Se connecter</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Contact</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <input type="search" class="form-control" placeholder="Rechercher..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>
            </div>
        </div>
        </div>
    </header>

    <!-- Slider -->
    <link rel="stylesheet" href="assets/slider/ism/css/my-slider.css"/>
    <script src="assets/slider/ism/js/ism-2.2.min.js"></script>

    <div class="ism-slider" data-transition_type="fade" data-play_type="once" data-image_fx="zoompan" id="my-slider">
    <ol>
        <li>
        <a href="" target="_blank">
        <img src="assets/slider/ism/image/slides/statue-of-liberty-267948_1280.jpg">
        <a class="ism-caption ism-caption-2" href="" target="_blank" data-delay='500'>Webdev23</a>
        </a>
        </li>
        <li>
        <a href="" target="_blank">
        <img src="assets/slider/ism/image/slides/woodland-656969_1280.jpg">
        <a class="ism-caption ism-caption-2" href="" target="_blank" data-delay='500'>Dernier Article</a>
        </a>
        </li>
        <li>
        <a href="" target="_blank">
        <img src="assets/slider/ism/image/slides/budapest-655216_1280.jpg">
        <a class="ism-caption ism-caption-2" href="" target="_blank" data-delay='500'>Liste des Articles</a>
        </a>
        </li>
    </ol>
    </div>
    <!-- End Slider -->

    <main class="p-2">
    <h1 class="mx-4">WEBDEV23</h1>
    <p class="mx-4">Le développeur qu'il vous faut !</p>
    <p class="mx-4">lien vers cv</p>
    <p class="mx-4">reseaux sociaux</p>
    </main>

    <div class="container">
    <footer class="py-5">
        <div class="row">
        <div class="col-6 col-md-2 mb-3">
            <h5 class="mx-4">Section</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Accueil</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Liste des Articles</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Dernier Article</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Se connecter</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Admin</a></li>
            </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
            <form>
            <h5 class="mx-4">S'inscrire</h5>
            <!--<p>Monthly digest of what's new and exciting from us.</p> -->
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Adresse Email</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Adresse Email">
                <button class="btn btn-primary" type="button">S'inscrire</button>
            </div>
            </form>
        </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2023 Webdev23 | All rights reserved</p>
        <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"/></svg></a></li>
        </ul>
        </div>
    </footer>
    </div>

    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
