<!DOCTYPE html>
<html lang="en">
<head>

    <title>Ben Resume | CM Page</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Tooplate">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.theme.default.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/tooplate-ben-resume-style.css')}}">
    <!--
    Tooplate 2120 Ben Resume
    https://www.tooplate.com/view/2120-ben-resume
    -->
</head>

<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg">
    <div class="container">

        <a class="navbar-brand" href="{{route('frontend.index')}}">
            Resume
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="#intro" class="nav-link smoothScroll">Introduction</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link smoothScroll">Resume</a>
                    <ul>
                        @foreach($main_category as $category)
                            @if($category->count()>0)
                                <a href="{{route('frontend.category',$category->slug)}}" class="nav-link smoothScroll">{{$category->name}}</a>
                            @endif
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link smoothScroll">About Me</a>
                </li>

                <li class="nav-item">
                    <a href="#testimonials" class="nav-link smoothScroll">Reviews</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link smoothScroll">Contact</a>
                </li>
            </ul>

            <div class="mt-lg-0 mt-3 mb-4 mb-lg-0">
                <a href="#" class="custom-btn btn" download>Download CV</a>
            </div>
        </div>

    </div>
</nav>


<!-- HERO -->
<section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

    <div class="container">
        <div class="row">

            <div class="mx-auto col-lg-5 col-md-5 col-10">
                        <img src="{{asset('backend/images/information/'.$data['introductions']->image)}}" class="img-fluid" alt="Ben Resume HTML Template">
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                <div class="hero-text">

                    <h1 class="hero-title">👋 {{$data['introductions']->fullName}}, a digital nomad</h1>

                    <a href="#" class="email-link">
                        {{$data['introductions']->email}}
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>


<section class="about section-padding" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12">
                <h3 class="mb-4">{{$data['introductions']->heading}}</h3>

                <p>{{$data['introductions']->detail}}</p>

                <ul class="mt-4 mb-5 mb-lg-0 profile-list list-unstyled">
                    <li><strong>Full Name :</strong>{{$data['introductions']->fullName}}</li>

                    <li><strong>Date of Birth:</strong>{{$data['introductions']->dob}}</li>

                    <li><strong>Website :</strong>{{$data['introductions']->website}}</li>

                    <li><strong>Email :</strong>{{$data['introductions']->email}}</li>
                </ul>
            </div>

            <div class="col-lg-5 mx-auto col-md-6 col-12">
                <img src="{{asset('assets/frontend/images/true-agency.jpg')}}" class="about-image img-fluid" alt="Ben's Resume HTML Template">
            </div>

        </div>
        <div class="row about-third">
            <div class="col-lg-4 col-md-4 col-12">
                <h3>{{$data['introductions']->expTitle1}}</h3>
                <p>{{$data['introductions']->expBody1}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <h3>{{$data['introductions']->expTitle2}}</h3>
                <p>{{$data['introductions']->expBody2}}</p>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <h3>{{$data['introductions']->expTitle3}}</h3>
                <p>{{$data['introductions']->expBody3}}</p>
            </div>

        </div>
    </div>
</section>


<!-- TESTIMONIAL -->
<section class="testimonials section-padding" id="testimonials">
    <div class="container">
        <div class="row">

            <div class="col-12">
                <h3 class="mb-5 text-center">What People say</h3>

                <div class="owl-carousel owl-theme" id="testimonials-carousel">

                    @foreach($main_review as $review)
                        @if($review->count()>0)
                            <div class="item">
                                <div class="testimonials-thumb d-flex">
                                    <div class="testimonials-image">
                                        <img src="{{asset('backend/images/review/'.$review->image)}}" class="img-fluid" alt="testimonials image">
                                    </div>

                                    <div class="testimonials-info">
                                        <p>{{$review->description}}</p>

                                        <h6 class="mb-0">{{$review->name}}</h6>
                                        <span>{{$review->profession}}</span>
                                    </div>
                                </div>
                            </div>
                            @endif

                            @endforeach</p>

                </div>

            </div>

        </div>
    </div>
</section>



<!-- FAQ -->
<section class="faq section-padding">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-12">

                <h3 class="mb-5">Frequently Asked Questions</h3>

                <div class="accordion" id="accordionExample">
                    @foreach($main_faq as $faq)
                        @if($faq->count()>0)



                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            {{$faq->questions}}
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        <p>{{$faq->answers}}</p>
                                    </div>
                                </div>
                            </div>

                        @endif
                    @endforeach

                    <span class="faq-info-text">Please send us a message if you have anything to say. Send an email message to <strong>contact (at) tooplate (dot) com</strong></span>

                </div>

            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
</section>


<section class="contact section-padding pt-0" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-12">
                <form action="#" method="get" class="contact-form webform"  role="form">

                    <div class="form-group d-flex flex-column-reverse">
                        <input type="text" class="form-control" name="cf-name" id="cf-name" placeholder="Your Name">

                        <label for="cf-name" class="webform-label">Full Name</label>
                    </div>

                    <div class="form-group d-flex flex-column-reverse">
                        <input type="email" class="form-control" name="cf-email" id="cf-email" placeholder="Your Email">

                        <label for="cf-email" class="webform-label">Your Email</label>
                    </div>

                    <div class="form-group d-flex flex-column-reverse">
                        <textarea class="form-control" rows="5" name="cf-message" id="cf-message" placeholder="Your Message"></textarea>

                        <label for="cf-message" class="webform-label">Message</label>
                    </div>

                    <button type="submit" class="form-control" id="submit-button" name="submit">Send</button>
                </form>
            </div>

            <div class="mx-auto col-lg-4 col-md-6 col-12">
                <h3 class="my-4 pt-4 pt-lg-0">Say hello</h3>

                <p class="mb-1">010-020-0340</p>

                <p>
                    <a href="#">
                        hello@company.co
                        <i class="fas fa-arrow-right custom-icon"></i>
                    </a>
                </p>

                <ul class="social-links mt-2">
                    <li><a href="https://fb.com/tooplate" rel="noopener" class="fab fa-facebook"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-twitter"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-instagram"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-linkedin"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                </ul>

                <p class="copyright-text mt-5 pt-3">Copyright &copy; 2020 Ben Resume Page</p>

                <p>Design: <a href="https://www.tooplate.com" title="free HTML templates" target="_blank">Tooplate</a></p>
            </div>

        </div>
    </div>
</section>
<!-- SCRIPTS -->
<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/smoothscroll.js')}}"></script>
<script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontend/js/custom.js')}}"></script>

</body>
</html>
