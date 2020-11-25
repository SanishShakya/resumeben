<!DOCTYPE html>
<html lang="en">
<head>

    <title>@foreach($main_introduction as $introduction)
            @if($introduction->count()>0)
                {{$introduction->fullName}}

            @endif

        @endforeach Resume | CM Page</title>

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




<section class="about section-padding" id="about">
    <div class="container">
        <h1 style="color: grey; text-align: center;">RESUMES LIST</h1><br>
        <div class="row about-third">
            @foreach($menu_introduction as $introductionMenu)
                @if($introductionMenu->count()>0)
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="testimonials-image">
                          <a href="{{route('frontend.resume',$introductionMenu->slug)}}" class="nav-link smoothScroll"><img src="{{asset('backend/images/information/'.$introductionMenu->image)}}" class="img-fluid" style="width: 150px; height: 150px;"></a>
                        </div>
                        <a href="{{route('frontend.resume',$introductionMenu->slug)}}" class="nav-link smoothScroll" style="font-size: 20px; color: black;">{{$introductionMenu->fullName}}</a>
                        <p>Hello, I am {{$introductionMenu->fullName}}<br>
                            {{$introductionMenu->email}}<br>
                            {{$introductionMenu->website}}</p>
                    </div>
                @endif
            @endforeach
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
