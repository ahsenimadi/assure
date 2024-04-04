@extends('layouts/front')
@section('content')
<div class="innerbanner">
    <div class="text-center">
        <h1>About us</h1>
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a href="/" class="text-light">Home</a></li>
                <li class="breadcrumb-item active text-light" aria-current="page">About us</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu hendrerit turpis. Integer imperdiet nisl sollicitudin tellus blandit tincidunt. Nulla interdum diam massa, a feugiat risus lacinia eu. Quisque bibendum tincidunt sem, a scelerisque nisi varius nec. Fusce et dui id sapien laoreet dignissim. Nam tempus dolor ac convallis pharetra. Donec convallis massa in gravida pellentesque. Maecenas ipsum dui, sodales a porta vel, consectetur id nulla. Ut nec lorem ligula. Phasellus mi libero, tristique eu tellus sit amet, venenatis bibendum tortor. Donec ac nisl justo. Nunc volutpat, orci vitae tempor varius, nisi neque accumsan sapien, non rutrum dui nulla eget mi. Ut est lorem, tincidunt pretium luctus sit amet, malesuada ac erat. Sed vestibulum sapien in dui dapibus gravida. Maecenas at nunc varius, congue lacus eu, hendrerit nulla. Curabitur id massa venenatis, cursus libero non, gravida risus.</p>
            <p>Cras sagittis tellus vitae orci tempor volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Quisque sed ullamcorper mauris. Etiam lorem dolor, tincidunt quis eros vitae, mattis porttitor eros. Quisque ut ligula nec tellus sollicitudin convallis. Curabitur tempus posuere nibh. Aliquam interdum lobortis sapien vel vulputate. Nulla finibus malesuada venenatis. Morbi dignissim dapibus risus id vulputate.</p>
            <p>Integer est nulla, elementum in nulla in, lacinia hendrerit tortor. Donec id neque congue, tincidunt ex nec, ullamcorper ex. Ut sed lobortis felis. Aenean congue purus a purus mollis blandit. Maecenas sodales sapien lectus, in aliquam ipsum sollicitudin eget. Nulla facilisi. In sed maximus neque. Integer nec pulvinar neque. Duis massa mauris, sagittis at dapibus id, consequat id mauris. Etiam vitae libero in odio maximus iaculis vitae id est. Aliquam erat volutpat. Vestibulum ut iaculis felis, ac aliquam tellus. Mauris lobortis ligula ante, ac egestas massa consequat ultrices. Praesent nibh dolor, vulputate eget tincidunt hendrerit, fermentum in mi. Pellentesque blandit enim a tortor dignissim, a porta est venenatis.</p>
        </div>
        <div class="col-md-6">
            <img src="{{url('assets/images/about.jpg')}}" class="w-100" alt="about us">
        </div>
    </div>
</div>
<div class="bg-info-subtle">
    <div class="container py-5">
        <div class="row g-5 justify-content-center">
            <div class="col-md-4">
                <div class="card bg-info-subtle text-center rounded-5 vision-card">
                    <div class="vision-icon">
                        <i class="fa-solid fa-glasses"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="text-first">Our Vision</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis incidunt dolorem dolore aspernatur, rerum suscipit ut minima nulla possimus a totam consectetur, culpa cumque delectus doloremque nemo ipsum atque. Eveniet?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-info-subtle text-center rounded-5 vision-card">
                    <div class="vision-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <div class="card-body">
                        <h4 class="text-first">Our Mission</h4>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis incidunt dolorem dolore aspernatur, rerum suscipit ut minima nulla possimus a totam consectetur, culpa cumque delectus doloremque nemo ipsum atque. Eveniet?</p>
                    </div>
                </div>
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
@endsection