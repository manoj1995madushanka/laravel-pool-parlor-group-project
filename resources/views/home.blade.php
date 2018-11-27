
@extends('layouts.app')

@include('includes.scrollBtn')
@section('content')
{{-- @include('includes.callander') --}}
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
  
            <section id="join">
                    <br><br>
      
                                    <!-- Heading -->
                   <h2 class="mb-5 font-weight-bold text-center txtLogin">Book Now</h2>
                    
                    <div class="card-deck">
                        <div class="card">
                            <img class="card-img-top" src="/images/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 1</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 2</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 3</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>

                        <div class="card">
                            <img class="card-img-top" src="/images/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Book Table 4</h5>
                                <form action="">
                                    <button type="button" class="btn btn-success">BOOK</button>
                                </form>
                                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                            </div>
                        </div>
                        
                    </div>


<<<<<<< HEAD
                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com </a>
        </div>
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

</html> --}}

@extends('layouts.app')

@include('includes.scrollBtn')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div class="row">
                        

                    <!--Grid column-->
                    <div class="col-md-5 signupdiv">
                        <br>
                        <h3 class="mb-5 font-weight-bold text-center">Table 3</h3>

                        <div>

                                <div class="view overlay z-depth-1-half">
                                    <img src="/images/3.1.jpg" class="img-fluid" alt="">
                                    <div class="mask rgba-white-slight"></div>
                                </div>
            
                                 <h4 class="my-4 font-weight-bold">Deatails</h4>
                                <p class="grey-text">me table eka gana monawa hari details damu</p>
            
                            </div>

                        {{-- <form class="p-5" method="POST" action="{{ route('register') }}">
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
                    </form> --}}
                    @include('includes.callander')
                </div>
                    <!--Grid column-->
                     <div class="col-md-2"></div>

                     
                    <div class="col-md-5 signupdiv">
                        <br>    
                        <h3 class="mb-5 font-weight-bold text-center">Table 4</h3>

                        <div>

                            <div class="view overlay z-depth-1-half">
                                <img src="/images/4.1.jpg" class="img-fluid" alt="">
                                <div class="mask rgba-white-slight"></div>
                            </div>
            
                            <h4 class="my-4 font-weight-bold">Deatails</h4>
                            <p class="grey-text">me table eka gana monawa hari details damu</p>
            
                        </div>

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
=======
                </div>                
            </section> 
>>>>>>> 056d73baae552043b907aa84e3010b6576da871e
        </div>
    </div>
</div>


@endsection
