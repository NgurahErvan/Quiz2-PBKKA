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
                <a class="navbar-brand js-scroll-trigger" href="<?= base_url('/') ?>">Cinema Box</a>
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
        

        <header class="masthead">
        <div class="container pt-5">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url('assets/img/' . $mov['cover_img']) ?>" alt="" class="reserve-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card bg-primary">
                            <div class="card-body text-white">
                                <h3><b><?= $mov['title'] ?></b></h3>
                                <hr>
                                <p class=""><small><b>Description: </b><i><?= $mov['description'] ?></i></small></p>
                                <p class=""><small><b>Duration: </b><i><?= $duration ?></i> minutes</small></p>
                            </div>
                        </div>
                        <div class="card bg-light mt-2">
                            <div class="card-body">
                                <h4>Reserve your seat Here</h4>
                                <!-- Your form and input fields go here -->
                                <form action="<?= base_url('reserve/book') ?>" method="post" id="save-reserve">
                                <input type="hidden" name="movie_id" value="<?= $mov['id'] ?>">
    
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="firstname" class="control-label">Firstname</label>
                                        <input type="text" name="firstname" id="firstname" required class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="lastname" class="control-label">Lastname</label>
                                        <input type="text" name="lastname" id="lastname" required class="form-control">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="contact_no" class="control-label">Contact</label>
                                        <input type="text" name="contact_no" id="contact_no" required class="form-control">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="ts_id" class="control-label">Theater</label>
                                        <select class="browser-default custom-select" name="ts_id" id="ts_id" required>
                                            <option value=""></option>
                                            <?php foreach ($theaters as $theater): ?>
                                                <option value="<?= $theater['id'] ?>"><?= $theater['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>


                                </div>
                                    <div class="row">
                                        <div class="form-group ml-4 col-md-2">
                                            <label for="" class="control-label">Qty</label>
                                            <input type="number" name="qty" id="qty" class="form-control" min="0" required="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="" class="control-label">Date</label>
                                            <select name="date" id="date" class="custom-select browser-default">
                                                <?php 
                                                $startDate = strtotime($mov['date_showing']);
                                                $endDate = strtotime($mov['end_date']);

                                                while ($startDate <= $endDate) {
                                                    $formattedDate = date('Y-m-d', $startDate);

                                                    // Only display dates starting from today
                                                    if ($formattedDate >= date('Y-m-d')) {
                                                        echo "<option value='" . $formattedDate . "'>" . date('M d, Y', $startDate) . "</option>";
                                                    }

                                                    // Move to the next day
                                                    $startDate = strtotime('+1 day', $startDate);
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="" class="control-label">Time</label>
                                            <select name="time" id="time" class="custom-select browser-default">
                                                <?php
                                                $times = ['09:00 AM', '12:00 PM', '03:00 PM', '06:00 PM', '09:00 PM'];

                                                foreach ($times as $time) {
                                                    echo '<option value="' . date('H:i', strtotime($time)) . '">' . $time . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        
                                    </div>


                                <!-- Additional input fields or sections as needed -->

                                <div class="row">
                                    <button type="submit" class=" ml-4 mb-3 col-md-2 btn btn-block btn-primary">Book</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


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
