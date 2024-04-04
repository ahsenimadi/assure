@extends('layouts/front')
@section('content')
<div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="slide1">
            <div class="container text-light">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Lorem ipsum</h6>
                        <h1 class="display-1 fw-bold">Lorem ipsum dolor sit</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam voluptates numquam voluptatem quibusdam eaque asperiores quam deleniti laborum veritatis aperiam assumenda harum, inventore sapiente nesciunt vero natus ipsam ad quos?</p>
                        <a href="{{route('about')}}" class="btn btn-second btn-lg rounded-0">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="slide2">
            <div class="container text-dark">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Lorem ipsum</h6>
                        <h1 class="display-1 fw-bold">Lorem ipsum dolor sit</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam voluptates numquam voluptatem quibusdam eaque asperiores quam deleniti laborum veritatis aperiam assumenda harum, inventore sapiente nesciunt vero natus ipsam ad quos?</p>
                        <a href="{{route('about')}}" class="btn btn-second btn-lg rounded-0">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="slide3">
            <div class="container text-light">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Lorem ipsum</h6>
                        <h1 class="display-1 fw-bold">Lorem ipsum dolor sit</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam voluptates numquam voluptatem quibusdam eaque asperiores quam deleniti laborum veritatis aperiam assumenda harum, inventore sapiente nesciunt vero natus ipsam ad quos?</p>
                        <a href="{{route('about')}}" class="btn btn-second btn-lg rounded-0">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container py-5">
    <div class="text-center">
        <h4 class="text-first text-uppercase">Our Services</h4>
        <p class="fs-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero ratione labore cumque architecto modi laboriosam. Fuga officia neque, commodi deserunt quae incidunt debitis dolorum recusandae, aut eum dignissimos corporis amet.</p>
    </div>
    <div class="row g-5 pt-3">
        <div class="col-md-4">
            <div class="card bg-light p-3 h-100 border-0 rounded-4 shadow spy-card">
                <div class="card-body">
                    <div class="img-box">
                        <img src="http://www.radiumsoft.com/assets/images/home/icon01.svg" alt="">
                    </div>    
                    <h4>IT Software Solutions</h4>
                    <p>Integrating intelligent IT solutions that empower your business.</p>
                    <a href="http://www.radiumsoft.com/it-services" class="text-decoration-none">Learn More <i class="fa-solid fa-arrow-up-right-dots"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light p-3 h-100 border-0 rounded-4 shadow spy-card">
                <div class="card-body">
                    <div class="img-box">
                        <img src="http://www.radiumsoft.com/assets/images/home/icon02.svg" alt="">
                    </div>    
                    <h4>IT &amp; Healthcare Staffing</h4>
                    <p>Make hiring easy with our Staffing Solutions.</p>
                    <a href="http://www.radiumsoft.com/it-staffing" class="text-decoration-none">Learn More <i class="fa-solid fa-arrow-up-right-dots"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light p-3 h-100 border-0 rounded-4 shadow spy-card">
                <div class="card-body">
                    <div class="img-box">
                        <img src="http://www.radiumsoft.com/assets/images/home/icon03.svg" alt="">
                    </div>    
                    <h4>IT Training</h4>
                    <p>Guidance &amp; training for the best career opportunities.</p>
                    <a href="http://www.radiumsoft.com/IT-Training" class="text-decoration-none">Learn More <i class="fa-solid fa-arrow-up-right-dots"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-spy">
    <div class="container py-5">
        <div class="text-center">
            <h4 class="text-first text-uppercase">About Us</h4>
            <p class="fs-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero ratione labore cumque architecto modi laboriosam. Fuga officia neque, commodi deserunt quae incidunt debitis dolorum recusandae, aut eum dignissimos corporis amet.</p>
        </div>
        <div class="row g-5">
            <div class="col-md-6">
                <img src="{{url('assets/images/about.jpg')}}" class="w-100" alt="about">
            </div>
            <div class="col-md-6 my-auto">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repudiandae eius ducimus dolorem alias quia temporibus aliquid at, iste reprehenderit minus sapiente, itaque illo a ea sed in nostrum fuga eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas fuga sapiente praesentium distinctio eum reprehenderit voluptatem eligendi necessitatibus dolorum quos repellat iste minima, sit facilis eius quia delectus assumenda dicta.</p>
                <a href="{{route('about')}}" class="btn btn-second btn-lg rounded-0">Read more</a>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="text-center">
        <h4 class="text-first text-uppercase">TESTIMONIAL</h4>
        <p class="fs-3">What Our Clients Are Saying About Us</p>
    </div>
    <div class="row g-5">
      <div class="col-md-4">
        <div class="card border-0 rounded-4 shadow h-100 spy-card">
          <div class="card-body p-4">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis exercitationem veniam doloribus similique, quibusdam incidunt facilis officia, asperiores nulla enim qui quidem placeat ratione odio temporibus corrupti debitis quae numquam.</p>
            <div class="row">
              <div class="col-4">
                <img src="{{url('assets/images/user.png')}}" class="rounded-circle" style="width: 60px; height: 60px" alt="testimonials">
              </div>
              <div class="col my-auto">
                <h4>Sarah Johnson</h4>
                <h6>Director of IT at TechSolutions Inc.</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 rounded-4 shadow h-100 spy-card">
          <div class="card-body p-4">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque voluptatem assumenda sequi perspiciatis similique quis itaque doloribus blanditiis cum, quam omnis? Non quod culpa reprehenderit voluptates ipsum? Expedita, explicabo enim?</p>
            <div class="row">
              <div class="col-4">
                <img src="{{url('assets/images/user.png')}}" class="rounded-circle" style="width: 60px; height: 60px" alt="testimonials">
              </div>
              <div class="col my-auto">
                <h4>Mark Thompson</h4>
                <h6>Chief Information Officer at Global Enterprises</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card border-0 rounded-4 shadow h-100 spy-card">
          <div class="card-body p-4">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link p-1 text-warning" href="#"><i class="fa fa-star"></i></a>
              </li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Commodi veritatis, veniam blanditiis sed distinctio cumque, quam molestiae eveniet ut nobis praesentium necessitatibus, cum nemo accusantium? Et id ipsam iure consequatur.</p>
            <div class="row">
              <div class="col-4">
                <img src="{{url('assets/images/user.png')}}" class="rounded-circle" style="width: 60px; height: 60px" alt="testimonials">
              </div>
              <div class="col my-auto">
                <h4>Emily Davis</h4>
                <h6>IT Manager at SecureTech Solutions</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="bg-light">
    <div class="container py-5">
        <div class="text-center">
            <h4 class="text-first text-uppercase">Our Partners</h4>
            <p class="fs-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero ratione labore cumque architecto modi laboriosam. Fuga officia neque, commodi deserunt quae incidunt debitis dolorum recusandae, aut eum dignissimos corporis amet.</p>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-xs-6 col-lg-2">
                <div class="wrap">
                    <div class="ico-wrap">
                        <a>
                            <img src="http://www.radiumsoft.com/uploads/clients/256db67dc83c93dd451582abc4f6bc89.jpg" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-2">
                <div class="wrap">
                    <div class="ico-wrap">
                        <a>
                            <img src="http://www.radiumsoft.com/uploads/clients/ad5f5d7a4925133b2c7c6529a5a485e9.jpg" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-2">
                <div class="wrap">
                    <div class="ico-wrap">
                        <a>
                            <img src="http://www.radiumsoft.com/uploads/clients/cc46c3584b68578d1c488b22bee0d9e0.jpg" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-lg-2">
                <div class="wrap">
                    <div class="ico-wrap">
                        <a>
                            <img src="http://www.radiumsoft.com/uploads/clients/72e1e449ce72200ed5c5fbb0ff98cd2d.jpg" class="w-100" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container py-5">
    <div class="text-center">
        <h4 class="text-first text-uppercase">Blogs</h4>
        <p class="fs-3">Latest Blogs</p>
    </div>
    <div class="row g-5 pt-3">
        <div class="col-md-4">
            <div class="card bg-light h-100 border-0 rounded-4 overflow-hidden shadow spy-card">
                <img src="https://www.radiumsoft.com/uploads/blogs/648146a08805a7280b3ffebb4dae4d44.jpg" class="card-img-top" alt="blog">
                <div class="card-body"> 
                    <h4>Blog title</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, itaque explicabo ipsum culpa veniam molestiae omnis tenetur. </p>
                    <a href="http://www.radiumsoft.com/it-services" class="text-decoration-none">Learn More <i class="fa-solid fa-arrow-up-right-dots"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light h-100 border-0 rounded-4 overflow-hidden shadow spy-card">
                <img src="https://www.radiumsoft.com/uploads/blogs/648146a08805a7280b3ffebb4dae4d44.jpg" class="card-img-top" alt="blog">
                <div class="card-body"> 
                    <h4>Blog title</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, itaque explicabo ipsum culpa veniam molestiae omnis tenetur. </p>
                    <a href="http://www.radiumsoft.com/it-services" class="text-decoration-none">Learn More <i class="fa-solid fa-arrow-up-right-dots"></i></a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-light h-100 border-0 rounded-4 overflow-hidden shadow spy-card">
                <img src="https://www.radiumsoft.com/uploads/blogs/648146a08805a7280b3ffebb4dae4d44.jpg" class="card-img-top" alt="blog">
                <div class="card-body"> 
                    <h4>Blog title</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Animi, itaque explicabo ipsum culpa veniam molestiae omnis tenetur. </p>
                    <a href="http://www.radiumsoft.com/it-services" class="text-decoration-none">Learn More <i class="fa-solid fa-arrow-up-right-dots"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href="#" class="btn btn-second btn-lg rounded-0">View more</a>
    </div>
</div>
@endsection