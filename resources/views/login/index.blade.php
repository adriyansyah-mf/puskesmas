<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Free Tour and Travel Website Tempalte | Smarteyeapps.com</title>
    <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

    <body class="form-login-body"> 
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 mx-auto login-desk">
                       <div class="row">
                           
                            <div class="col-md-5 loginform">
                                <div class="log-txt row no-margin">
                                    <p></p>
                                    <h2>Most Advanced Marketing <br>
                                    Login Page Template </h2>
                                    {{-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's </p> --}}
                                </div>
                                
                                 <div class="login-det">
                                    <img src="assets/images/6.jpg" alt="">
                                 </div>
                            </div>
                            
                             <div class="col-md-7 detail-box">
                                @if(session()->has('loginError'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align:center">
                                    {{ session('loginError') }}
                                    <button type="button", class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    </button>
                                </div>
                            @endif
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="detailsh col-lg-7 col-md-10 col-sm-7 col-11 mx-auto">
                                        <img class="logo" src="assets/images/logo-2.png" alt=""> 
                                        <div class="row form-ro no-margin">
                                            <input type="email" name="email" @error('email') is-invalid
                                                
                                            @enderror id="email" placeholder="name@example.com" class="form-control form-control-sm" required value="{{ old ('email') }}">
                                            @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        
                                        <div class="row form-ro no-margin">
                                            <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-sm" required>
                                        </div>
                                        <div class="row form-ro fgbh">
                                            <div class="col-6">
                                                <p></p>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn btn-sm btn-primary" type="submit">Login</button>
                                            </div>
                                        </div>
                                        <div class="row form-ro hlio fgbh">
                                            <div class="col-md-12">
                                                <p> <h5>Silahkan login</h5> </p>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                       </div>
                      
                    </div>
                </div>
            </div>
    </body>

    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
</html>
