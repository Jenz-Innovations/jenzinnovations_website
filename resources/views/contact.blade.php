<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Jenz Innovations | Contact</title>

    <!-- Favicon  -->
   <link rel="icon" href="{{ asset('assets/img/core-img/favicon.ico') }}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">

    <!-- Responsive CSS -->
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <!-- <div id="preloader">
        <div class="showbox">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <div class="questions-area text-center">
            <p>Did you know?</p>
            <ul>
                <li>The largest photography competition is 353,768 entries.</li>
                <li>Photography is the toughest profession in the world.</li>
                <li>The world’s largest photo album by dimensions was 13 ft 11.5 in x 17 ft.</li>
                <li>The world’s largest photo mosaic featured 176,175 pictures.</li>
                <li>The world’s largest camera lens was a 5200mm lens attached to a canon.</li>
            </ul>
        </div>
    </div> -->

    <!-- Gradient Background Overlay -->
    <div class="gradient-background-overlay"></div>

    <!-- Header Area Start -->
    <header class="header-area bg-img" style="background-image: url(assets/img/bg-img/14.jpg);">
        <div class="container-fluid h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 h-100">
                    <div class="main-menu h-100">
                        <nav class="navbar h-100 navbar-expand-lg">
                            <!-- Logo Area  -->
                            <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/core-img/NEW-logo/2024-06-15 - jesse.png') }}" alt="Logo" width="70%"></a>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                            <div class="collapse navbar-collapse" id="studioMenu">
                                <!-- Menu Area Start  -->
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="/about">About</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contact">contact</a>
                                    </li>
                                </ul>
                                <!-- Search Form -->
                                <!-- <div class="header-search-form ml-auto">
                                    <form action="#">
                                        <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                        <input class="d-none" type="submit" value="submit">
                                    </form>
                                </div> -->
                              
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Social Sidebar Area Start -->
    <div class="social-sidebar-area">
        <!-- Social Area -->
        <div class="social-info-area">
            <a href="#" data-toggle="tooltip" data-placement="right" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i> <span>Facebook</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i> <span>Twitter</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i> <span>Pinterest</span></a>
            <a href="#" data-toggle="tooltip" data-placement="right" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i> <span>Behance</span></a>
        </div>
    </div>
    <!-- Social Sidebar Area End -->

    <section class="contact-area section_padding_100 mt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="contact-heading-text text-center mb-100">
                        <span></span>
                        <h2>Please get in touch</h2>
                        <p>Ready to innovate and change the world? Let's connect! Reach out to us at support@jenzinnovations.com to learn more about our programs, share your ideas, or collaborate with us to drive positive change. Let's shape the future together!</p>
                    </div>
                </div>
                <!-- Contact Form Area -->
                <div class="col-10">
                    <div class="contact-form-area">
                        <form action="/contact" method="GET">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                </div>
                                <div class="col-12 col-md-4">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn studio-btn mt-3"><img src="img/core-img/logo-icon.png" alt=""> Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


  <!-- Footer Area Start -->
  <footer class="footer-area">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <div class="footer-content h-100 d-md-flex align-items-center justify-content-between">
                    <!-- Single Footer Content -->
                    <div class="single-footer-content">
                        <img src="{{ asset('assets/img/core-img/map.png') }}" alt="">
                        <a href="#">KNUST, Kumasi</a>
                    </div>
                    <!-- Single Footer Content -->
                    <div class="single-footer-content">
                        <img src="{{ asset('assets/img/core-img/smartphone.png') }}" alt="">
                        <a href="#">+(233) 268 977-129</a>
                    </div>
                    <!-- Single Footer Content -->
                    <div class="single-footer-content">
                        <img src="{{ asset('assets/img/core-img/envelope-2.png') }}" alt="">
                        <a href="#">support@jenzinnovations.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->

    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Plugins js -->
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('assets/js/active.js') }}"></script>
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="{{ asset('assets/js/map-active.js') }}"></script>


</body>

</html>