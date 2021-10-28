<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ config('app.name', 'WMS_G5') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <style>
        span,
        a,
        li {
            color: white;
        }

        body {
            font: size 20px;
            ;
        }
    </style>
</head>

<body>
    <!-- Menu Bar  -->
    <div class="container-fluid" id="yAppRegister">
        <!-- Shop Banner  -->
        <header style="background-color:white;" height="150px;" class="embed-responsive">
            <div class="row" height=150px style="background-color:white;">
                <div class="col-sm-2">
                    <img class="img-fluid" src="{{ url('pictures/logo.png') }}">
                </div>
                <div class="col-sm-10">
                    <img class="img-fluid" src="{{ url('pictures/banner(1).png') }}">
                </div>
            </div>
        </header>
        <!-- Menu bar1 -->
        <nav class="navbar navbar-expand-xl navbar-dark " style="background-color: #333;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL1" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContentXL1">
                <ul class="navbar-nav mr-auto" style="width: 80%;">
                </ul>

                <ul class="nav navbar-nav justify-content-center" style="width: 20%">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('yLogin') }}" style="color:white">
                            {{ __('Login') }}
                        </a>
                    </li>

                    @if (Route::has('yRegister'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('yRegister') }}" style="color:white">
                            {{ __('Register') }}
                        </a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('yLogout') }}">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
        <nav class="navbar navbar-expand-xl navbar-dark " style="background-color: dimgrey;">
            <a class="navbar-brand" href="{{ route('yHome') }}">{{ config('app.name', 'SHOESSHOP') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentXL2" aria-controls="navbarSupportedContentXL" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContentXL2">
                <ul class="navbar-nav mr-auto" style="width: 80%; text-align: center;">
                    <li class="nav-item active" style="width:15%">
                        <a class="nav-link" href="#">NEW ARRIVAL <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown active" style="width: 15%; text-align: center;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MAN
                        </a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownXL">
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 1</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 2</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 3</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 4</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 5</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active" style="width: 15%; text-align: center;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            WOMAN
                        </a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownXL">
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 1</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 2</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 3</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 4</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 5</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown active" style="width: 15%; text-align: center;">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownXL" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            KIDS
                        </a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdownXL">
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 1</a>
                            <a class="dropdown-item" href="#" style="font-weight:bold">#CateDetail 2</a>
                        </div>
                    </li>
                    <li class="nav-item active" style="width:15%">
                        <a class="nav-link" href="#">SALE <span class="sr-only"></span></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav justify-content-center" style="width: 20%">
                    <li class="nav-item">
                        <a class="nav-link" href="/shoppingcart">
                            <img src="{{ url('pictures/cart.png') }}" height="30px" style="color:white">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/yourordered" style="color:white">Your Ordered
                        </a>
                    </li>
                </ul>
            </div>
        </nav><br><br>
        <div class='row justify-content-center' style="overflow-x:auto;">
            <!-- Show Register form  -->
            <div class="col-sm-8" style="background: none; height:fit-content; overflow-x:auto;">
                <div class="row ">
                    @yield('content')
                </div>
            </div>
        </div><br><br><br>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="col-xs-4"><a href="#2"><img src="{{url('pictures/banner chan trang.png')}}" class="img-fluid mx-auto d-block"></a></div>
            </div>
            <div class="col-md-4">
                <div class="col-xs-4"><a href="#2"><img src="{{url('pictures/banner chan trang.png')}}" class="img-fluid mx-auto d-block"></a></div>
            </div>
            <div class="col-md-4">
                <div class="col-xs-4"><a href="#2"><img src="{{url('pictures/banner chan trang.png')}}" class="img-fluid mx-auto d-block"></a></div>
            </div>
        </div>
        <footer style="color: white; font-size:15px">
            <div class="container-fluid" style="background: grey; height:fit-content;text-align:left">
                <div class="row">
                    <div class="col-sm-2">
                    </div>
                    <div class="col-sm-2">
                        <h4><a href="#"><span>POLICY</span></a></h4>
                        <a href="#"><span>Delivery</span> </a><br>
                        <a href="#"><span>Warranty</span> </a><br>
                        <a href="#"><span>Return</span> </a><br>
                        <a href="#"><span>Payment Term</span> </a><br>
                    </div>
                    <div class="col-sm-3" style="text-align: center;">
                        <h4><a href="#"><span>ABOUT US</span></a></h4>
                        <a href="#"><span>News</span> </a><br>
                        <a href="#"><span>Careers</span> </a><br>
                    </div>
                    <div class="col-sm-2">
                        <h4 style="text-align: center;"><a href="#"><span>CONTACT</span></a></h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-info btn-sm">
                                    <span class="glyphicon glyphicon-phone-alt"></span> Phone
                                </button>
                                <p>18001900</p>

                            </div>
                            <div class="col-sm-6">
                                <a href="#"><img src="{{url('pictures/facebook.png')}}" width="80px" height="40px"> </a><br>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="#"><img src="{{url('pictures/email.png')}}" width="50px" height="50px"> </a><br>

                            </div>
                            <div class="col-sm-6">
                                <a href="#"><img src="{{url('pictures/zalo.png')}}" width="50px" height="50px"> </a><br>

                            </div>
                            <div class="col-sm-2">
                            </div>
                        </div>
                    </div>
        </footer>
    </div>

</body>

</html>