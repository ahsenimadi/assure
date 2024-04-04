<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assure IT Solutions</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="icon" href="{{url('assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}">
</head>
<body>
    <div class="bg-first">
        <div class="container py-0">
            <div class="row">
                <div class="col-md-8">
                    <ul class="nav">
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fa-solid fa-envelope"></i> info@assureitsolutionsllc.com</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fa-solid fa-phone"></i> 847 510 5918</a>
                        </li>
                     </ul>
                </div>
                <div class="col-md-4">
                    <ul class="nav justify-content-center justify-content-md-end">
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white" href="#"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                     </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg bg-white shadow sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('assets/images/logo.png')}}" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark px-4 fs-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            IT Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark px-4 fs-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            IT Staffing
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark px-4 fs-5 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            IT Training
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-4 fs-5" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark px-4 fs-5" href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-second rounded-pill text-dark px-4 fs-5" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-first">
        <div class="container py-5">
            <div class="row pt-5 pb-3">
                <div class="col-lg-3 col-6 text-break">
                    <h3 class="h3 text-light mb-4">Quick Links</h3>
                    <ul class="nav flex-column mb-3">
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link small text-light" href="#" target="_blank"> <i class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link small text-light" href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link small text-light" href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link small text-light" href="#" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 text-break">
                    <h3 class="h3 text-light mb-4">Services</h3>
                    <ul class="nav flex-column mb-3">
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">IT Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Staffing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Training</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Authorizations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Partners</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 text-break">
                    <h3 class="h3 text-light mb-4">Company</h3>
                    <ul class="nav flex-column mb-3">
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="{{route('about')}}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Careers</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Sitemap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light px-0 py-1" href="#">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-6 text-break">
                    <h3 class="h3 text-light mb-4">Get in touch</h3>
                    <div class="mb-4">
                        <h5 class="h5 text-light">Call us</h5>
                        <a href="tel:7707831331" class="text-light nav-link p-0">847 510 5918</a>
                    </div>
                    <div class="mb-4">
                        <h5 class="h5 text-light">Email us</h5>
                        <a href="mailto:info@assureitsolutionsllc.com" class="text-light nav-link p-0">info@assureitsolutionsllc.com</a>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="row py-3">
                <div class="col-md-6 my-auto">
                    <p class="text-light mb-0 text-center text-md-start">© 2009 - 2024 assureitsolutionsllc.com All Rights Reserved</p>
                </div>
                <div class="col-md-6 my-auto">
                    <p class="text-light mb-0 text-center text-md-end">Designed by <a href="#" class="text-decoration-none text-light fw-bold">AIH Geekz</a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>
</html>