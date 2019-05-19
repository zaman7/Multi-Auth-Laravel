<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Multi Auth</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
        <!-- Stylesheets -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/ionicons.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/styles.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="container-fluid position-relative no-side-padding">
                <div class="row">
                    <div class="col-sm-12">
                        <a href="https://github.com/zaman7/" class="logo">Multi Auth</a>

                        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

                        <ul class="main-menu visible-on-click" id="main-menu">
                            <li><a href="{{ route('/') }}">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Features</a></li>
                            <li>
                                <a href="{{route('admin')}}" target="_blank">Admin</a>
                            </li>
                            <li>
                                <a href="{{route('user')}}" target="_blank">User</a>
                            </li>
                        </ul><!-- main-menu -->

                        <div class="src-area">
                            <form>
                                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                                <input class="src-input" type="text" placeholder="Type of search">
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- conatiner -->
        </header>

        <section class="blog-area section">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="post-wrapper">

                            <h3 class="title"><a href="https://github.com/zaman7/MultiAuthLaravel"><b>Laravel Multiple Authentication 5.8</b></a></h3>

                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos eligendi possimus voluptatem quidem iure cupiditate commodi veritatis fugit, magnam, nemo cum expedita alias odit? Laudantium, harum ratione quae ex iste.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae debitis quis eos, eveniet quae aliquam, illo minus non nemo unde magni rerum, consectetur neque! Cum at eligendi dolores corrupti deleniti.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dolore odio cupiditate obcaecati, magni ratione tempore temporibus corporis officia dolorum mollitia non nulla architecto perferendis alias deserunt facere iusto sint!</p>
                        </div><!-- post-wrapper -->
                    </div><!-- col-sm-8 col-sm-offset-2 -->
                </div><!-- row -->

            </div><!-- container -->
        </section><!-- section -->

        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-section">

                            <a class="logo" href="https://github.com/zaman7/">Multi Auth</a>
                            <p class="copyright">Multi Auth Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All rights reserved.</p>
                            <p class="copyright">Designed by <a href="https://github.com/zaman7" target="_blank">Zaman</a></p>
                            <ul class="icons">
                                <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                                <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                            </ul>

                        </div><!-- footer-section -->
                    </div><!-- col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                            <div class="footer-section">
                            <h4 class="title"><b>Menu</b></h4>
                            <ul class="main-menu visible-on-click" id="main-menu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Features</a></li>
                                <li>
                                    @if(Auth::guard('admin')->check())
                                        <a href="{{route('admin')}}" target="_blank">Admin</a>
                                    @endif
                                </li>
                                <li>
                                    @if(Auth::guard('web')->check())
                                        <a href="{{route('user')}}" target="_blank">User</a>
                                    @endif
                                </li>
                            </ul><!-- main-menu -->
                        </div><!-- footer-section -->
                    </div><!-- col-lg-4 col-md-6 -->

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-section">

                            <h4 class="title"><b>SUBSCRIBE</b></h4>
                            <div class="input-area">
                                <form>
                                    <input class="email-input" type="text" placeholder="Enter your email">
                                    <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                                </form>
                            </div>

                        </div><!-- footer-section -->
                    </div><!-- col-lg-4 col-md-6 -->

                </div><!-- row -->
            </div><!-- container -->
        </footer>
        <!-- SCIPTS -->
        <script src="{{ asset('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script src="{{ asset('assets/js/tether.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
        <script src="{{ asset('assets/js/scripts.js')}}"></script>
    </body>
</html>