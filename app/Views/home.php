<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cinema Box - Booking Cinema Ticket</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/img/favicon.ico') ?>" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Cinema Box</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#partners">Our Partners</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('/movies'); ?>">Now Playing</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">CINEMA BOX</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Your favorite cinema ticket booking application!</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="<?= base_url('/movies'); ?>">MOVIE LIST</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">We've got what you need!</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Cinema box has everything you need to get your movie ticket from home. Experience a well-organized cinema experience.</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Premium Service</h3>
                            <p class="text-muted mb-0">Get a luxurious experience!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">Get the latest movies all the time</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Worldwide</h3>
                            <p class="text-muted mb-0">We collaborate with many cinemas around the world!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Lovely Dovey</h3>
                            <p class="text-muted mb-0">Invite your favorite person to watch together</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Marketing messaging and featurettes
            ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->

            <h1 class="text-center mb-5" id="partners">Our Partners</h1>
          
            <div class="container marketing text-center">
          
              <!-- Three columns of text below the carousel -->
              <div class="row">
                <div class="col-lg-4">
                    <img src="<?= base_url('assets/img/xxi.png') ?>" alt="CGV Logo" class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2 class="fw-normal mt-3">XXI Cinema</h2>
                  <p>PT. Nusantara Sejahtera Raya (Cinema XXI - The Premiere - Cinema 21) is the largest cinema chain in Indonesia.</p>
                  <p><a class="btn btn-secondary" href="https://21cineplex.com/">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="<?= base_url('assets/img/download.jpeg') ?>" alt="CGV Logo" class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2 class="fw-normal mt-3">Cinepolis</h2>
                  <p>Cinépolis Luxury Cinemas is a leading world-class cinema exhibitor that offers guests MORE THAN A MOVIE ™</p>
                  <p><a class="btn btn-secondary" href="https://cinepolis.co.id/">View details »</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="<?= base_url('assets/img/cgv.png') ?>" alt="CGV Logo" class="bd-placeholder-img rounded-circle" width="140" height="140">
                  <h2 class="fw-normal mt-3">CGV</h2>
                  <p>CGV Cinemas Indonesia (formerly blitzmegaplex and CGV Blitz from 2015–2017) is a movie theater chain in Indonesia.</p>
                  <p><a class="btn btn-secondary" href="https://www.cgv.id/en/">View details »</a></p>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
          
              <!-- /END THE FEATURETTES -->
          
            </div><!-- /.container -->



        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider my-4" />
                        <p class="text-muted mb-5">This Web Application Creater By</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-user fa-3x mb-3 text-muted"></i>
                        <div>Made Nanda Wija Vahindra</div>
                        <div>5025211160</div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-user fa-3x mb-3 text-muted"></i>
                        <div>I Gusti Ngurah Ervan Juli Ardana</div>
                        <div>5025211205</div>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-user fa-3x mb-3 text-muted"></i>
                        <div>Mohammad Ahnaf Fauzan</div>
                        <div>5025211170</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2023 - Cinema Box</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url('js/scripts.js') ?>"></script>
    </body>
</html>
