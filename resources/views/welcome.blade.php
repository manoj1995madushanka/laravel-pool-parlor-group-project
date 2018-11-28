
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

    <title>{{ config('app.name') }}</title>
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
<!-- Material Design Bootstrap -->
<link href="{!! asset('css/mdb.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
<!-- Your custom styles (optional) -->
<link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />

</head>

<body>

    @include('includes.navbar')

    @include('includes.scrollBtn')
    <!--Main Navigation-->
    <header>
 
        <!--Mask-->
        <div id="intro" class="view">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-ml-8">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">S T R I P E S</h2>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 class="white-text my-4">
                                
                            </h4>
                            <button type="button" class="btn btn-outline-white scroll-join">
                                Join Us
                                <i class="fa fa-user-plus ml-2"></i> 
                            </button>
                            

                            <script>
                                $(".scroll-join").click(function() {
                                $('html,body').animate({
                                    scrollTop: $("#join").offset().top},
                                    'slow');
                                });
                            </script>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            
            <!--Section: Contact-->
            <section id="join">
<br><br><br><br>
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center txtLogin">Join Us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5 logindiv">
                        <h3 class="mb-5 font-weight-bold text-center">Log In</h3>
                        <!-- Form contact -->
                            <form class="p-5" method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="md-form form-sm"> <i class="fa fa-at prefix grey-text"></i>
                                    <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-sm" required>
                                    <label for="email">E Mail</label>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                    <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-sm" required>
                                    <label for="password">Password</label>

                                    @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Login') }} <i class="fa fa-sign-in-alt ml-1"></i></button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
        
                    </form>
                    </div>
                    <!--Grid column-->
                     <div class="col-md-2"></div>
                    <div class="col-md-5 signupdiv">
                            <h3 class="mb-5 font-weight-bold text-center">Sign Up</h3>
                            <form class="p-5" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    
                                    
                                    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="username" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('username') }}" required>
                                        <label for="username">Username</label>
    
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="md-form form-sm"> <i class="fa fa-at prefix grey-text"></i>
                                        <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('email') }}" required>
                                        <label for="email">Your Email</label>
    
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="f_name" id="f_name" class="form-control{{ $errors->has('f_name') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('f_name') }}" required>
                                        <label for="f_name">First Name</label>
    
                                        @if ($errors->has('f_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('f_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="l_name" id="l_name" class="form-control{{ $errors->has('l_name') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('l_name') }}" required>
                                        <label for="l_name">Last Name</label>
    
                                        @if ($errors->has('l_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('l_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
    
                                    <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                        <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-sm" required>
                                        <label for="password">Password</label>
    
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
    
                                    <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control form-control-sm" required>
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>
    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary">{{ __('Signup') }} <i class="fa fa-user-plus ml-1"></i></button>
                                    </div>  
                                    
                            <!-- Form contact -->
                        </form>
                    </div>
                </div>
                <!--Grid row-->

            </section>
            <!--Section: Join-->
<br><br><br><br><br><br><br>
            <!--Section: Best Features-->
            {{-- <section id="best-features" class="text-center">
                <br><br><br><br>
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Features of C H A T T E R</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-lock fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Security</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-users fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">User Friendly</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-share-square fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Easy Document Sharing</h4>
                    </div>
                    <!--Grid column-->
                </div>
<br><br><br><br>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-comment fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Reliable Messaging</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-phone fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Free and Clear Voice Chat</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-tachometer fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Low Data Usage</h4>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

            </section> --}}
            <!--Section: Best Features-->

            <hr class="my-5">


            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">About US</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="/images/slide1.jpg" alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/slide2.jpg" alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="/images/slide3.jpg" alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">

                        <!--Excerpt-->
                        
                        <h4 class="mb-3">
                            <strong>The Stripes</strong>
                        </h4>
                        <p>A Pool Parlor with Friendly, Happening, Musical,Fun filled and a laid back Atmosphere.
                             A place to Chill. Have a break and to Hang out with Your Mates.</p>


                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Gallery-->

            <hr class="my-5">

            <section id="contactUs">

                    <h2 class="mb-5 font-weight-bold text-center">Contact US</h2>

                    {{-- <form class="p-5" method="POST" action="/message"> --}}
                    {!! Form::open(['url' => '/message', 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}      
                            <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('name') }}" required>
                                <label for="name">Name</label>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="md-form form-sm"> <i class="fa fa-at prefix grey-text"></i>
                                <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('email') }}" required>
                                <label for="email">Your Email</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                <input type="text" name="msg" id="msg" class="form-control{{ $errors->has('msg') ? ' is-invalid' : '' }} form-control-sm" required>
                                <label for="msg">Message</label>

                                @if ($errors->has('msg'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('msg') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }} <i class="fa fa-user-plus ml-1"></i></button>
                            </div>  
                            
                    <!-- Form contact -->
                    {!! Form::close() !!}
                    
    
            </section>

            <hr class="my-5">

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer font-small unique-color-dark pt-0">

        <!-- Social buttons -->
        <div class="primary-color">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0">
                            <i class="fa fa-facebook white-text mr-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        
        <!--/.Copyright-->

    </footer>
    <!--/.Footer--> 


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src= {!! asset('js/jquery-3.3.1.min.js') !!}></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src= {!! asset('js/popper.min.js') !!}></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src= {!! asset('js/bootstrap.min.js') !!}></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src= {!! asset('js/mdb.min.js') !!}></script>
    

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js"></script>

    

    <!-- Carousel options -->
    <script>
        $('.carousel').carousel({
            interval: 3000,
        })
    </script> 
</body>

</html>
