<?php
$cn = mysqli_connect("localhost", "root", "", "db_admission");


?>



<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="style.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Student Management</title>
    <link rel="shourtcut icon" type="image/png" href="assets/img/favicon.png">
</head>

<body>
    <!--================= Header-area ======================-->
    <div class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <span>Conrise Public School<span id="na"></span></span>
                        </a>
                    </div>
                </div>
    <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                        <?php include('component/menu.php'); ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                    <span class="social-icon">
                        <a href="https://www.facebook.com/profile.php?id=61557895211285"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/pranjali-garg-8b8244258?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa fa-google-plus" ></i></a>
                        <a href="https://www.instagram.com/__pranjali__garg.02?igsh=YTBuMHY5NDdvNWQ2"><i class="fa fa-instagram"></i></a>
                       
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--======================= Slide-area =======================-->
    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2> Education</h2>
                                    <p>"Education is the manifestation of <br>
                                     perfection already in man.”

                                        <br><i><h3>Swami Vivekananda</h3></i>
                                    </p>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>Education</h2>
                                    <p>
                                    "Learning gives creativity,<br>
                                     creativity leads to thinking, thinking provides knowledge,<br>
                                      and knowledge makes you great."
                                        <br><i><h3>APJ Abdul Kalam</h3></i>
                                    </p>

                                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========================== Content-area ============================-->
    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <?php include ('component/controller.php'); ?>

                </div>
            </div>
        </div>
    </div>
    <!--========================== Footer-area ===============================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="widget">
                        <div class="logo">
                            <a href="">
                                <i class="fa fa-home"></i>
                                <span>Conrise Public  School</span>
                            </a>
                            <p> Education is what remains after one has forgotten <br>
                                what one has learned in school.

                                <br><i><h3>Albert Einstein</h3></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget">
                        <h3>Navigation</h3>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="?a=student_add">admission</a></li>
                                <li><a href="?a=view">students</a></li>
                               
                            
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Contact Us</h3>
                    <strong>  Pranjali Garg</strong> <br>
                    <i class="fa fa-phone" ><strong>  123456789</strong></i><br>
                    <i class="fa fa-envelope" ><strong>  Pranjaligarg095@gmail.com</strong></i><br>
                    <i class="fa fa-addres" ><strong>  Satna -485001</strong></i><br>
                   
                    <span class="social-icon">
                        <a href="https://www.facebook.com/profile.php?id=61557895211285"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/in/pranjali-garg-8b8244258?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.instagram.com/__pranjali__garg.02?igsh=YTBuMHY5NDdvNWQ2"><i class="fa fa-instagram"></i></a>
                    </span>
                </div>
                <p class="copy-right"  >Copyright &copy;Pranjali Garg - 2024</p >
            </div>
        </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>
