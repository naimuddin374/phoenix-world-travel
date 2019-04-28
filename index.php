<?php
require("model/db.php");
session_start();
?>
<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <script>
            function ajax() {
                var req = new XMLHttpRequest();
                req.onreadystatechange = function () {
                    if (req.readyState == 4 && req.status == 200) {
                        document.getElementById('chat').innerHTML = req.responseText;
                    }
                }
                req.open('POST', 'view/chat.php', true);
                req.send();
            }
            setInterval(function () {
                ajax();
            }, 500);
        </script>
        <!-- Title -->
        <?php
        $title = "Home";
        if (isset($_GET['f'])) {
            if ($_GET['f'] == "home") {
                $title = "Phoenix World Travel";
            }
            if ($_GET['f'] == "about-us") {
                $title = "About Us";
            } else if ($_GET['f'] == "enquiry") {
                $title = "Quote & Enquiry";
            } else if ($_GET['f'] == "tour-travel") {
                $title = "Tour & Travel";
            } else if ($_GET['f'] == "contact-us") {
                $title = "Contact Us";
            }
else if ($_GET['f'] == "gallery") {
                $title = "Photo Gallery";
            }
        }
        ?>
        <!-- Title -->
        <title><?php echo $title; ?></title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="assets/img/icosn-1142040.png" rel="icon">
        <!-- Bootstrap Core CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link href="assets/css/font-awesome.css" rel="stylesheet">
        <link href="assets/css/owl.carousel.css" rel="stylesheet">
        <link href="assets/css/owl.theme.css" rel="stylesheet">
        <link href="assets/css/owl.transitions.css" rel="stylesheet">
        <link href="assets/css/nexus.css" rel="stylesheet">
        <link href="assets/css/jquery.datetimepicker.css" rel="stylesheet">
        <link href="assets/css/lightbox.css" rel="stylesheet">
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/customfont/stylesheet.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
        <script src="//code.tidio.co/dpkddaajnulj875pytimhlahnw8omdu5.js"></script>

    </head>
    <body onLoad="ajax()">
        <div id="body_bg">
            <div id="pre_header" class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <p class="booking">
                            Booking & Enquiry: 1300 699 033
                        </p>
                    </div><!-- End booking -->
                    <div class="col-md-6 col-xs-6 col-sm-6 text-right">
                        <ul class="social-icons pull-right">
                            <li class="social-facebook">
                                <a href="https://www.facebook.com/PhoenixWorldTravel" target="_blank" title="facebook">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-twitter">
                                <a href="https://twitter.com/login" target="_blank" title="twitter">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-google-plus">
                                <a href="https://www.pinterest.com/login/" target="_blank" title="pinterest">
                                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-pinterest-p">
                                <a href="https://plus.google.com/collections/featured?hl=en" target="_blank" title="google-plus">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="social-wpforms">
                                <a href="https://www.instagram.com/accounts/login/" target="_blank" title="instagram">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul><!-- End social-icons -->
                    </div>
                </div><!-- End row -->
            </div><!-- End Pre_header -->
            <div class="primary-container-group">
                <!-- Background -->
                <div class="primary-container-background">
                    <div class="primary-container"></div>
                    <div class="clearfix"></div>
                </div><!--End primary-container-background -->

                <div class="primary-container">
                    <!-- Top Menu -->
                    <div id="hornav" class="container no-padding">
                        <div class="row">
                            <!-- Logo -->
                            <div class="col-md-4 col-sm-4">
                                <div class="logo">
                                    <a href="index.php?f=home" title="main-logo">
                                        <img src="assets/img/logo.png" alt="Logo" class="img-responsive"/>
                                    </a>
                                </div>
                            </div>
                            <!-- End Logo -->
                            <div class="col-md-8 col-sm-8 no-padding">
                                <div class="pull-right visible-lg">
                                    <ul id="hornavmenu" class="nav navbar-nav">
                                        <li>
                                            <a href="index.php?f=home">HOME</a>
                                        </li>

                                        <li>
                                            <a href="index.php?f=about-us">ABOUT US</a>
                                        </li>
                                        <li>
                                            <a href="index.php?f=enquiry">QUOTE & ENQUIRY</a>

                                        </li>
                                        <li>
                                            <a href="index.php?f=tour-travel">TOUR & TRAVEL</a>
                                        </li>

                                        <li>
                                            <a href="index.php?f=contact-us">CONTACT US</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div><!-- End row -->
                    </div><!-- End hornav-->
                    <!-- End Top Menu -->
                    <!-- === END HEADER === -->

<?php
if (isset($_GET['f'])) {
    if (file_exists("view/tr-" . $_GET['f'] . "-aus.php")) {
        require("view/tr-" . $_GET['f'] . "-aus.php");
    } else {
        require("view/tr-" . "404" . "-aus.php");
    }
} else if (isset($_GET['a']) && isset($_SESSION['myid'])) {
    if (file_exists("view/admin/tr-" . $_GET['a'] . "-aus.php")) {
        require("view/admin/tr-" . $_GET['a'] . "-aus.php");
    } else {
        require("view/tr-" . "404" . "-aus.php");
    }
} else {
    require("view/tr-" . "home" . "-aus.php");
}
?>



                    <!-- === BEGIN FOOTER === -->
                    <div id="base">
                        <div class="container padding-vert-30">
                            <div class="row">
                                <!-- footer Menu -->
                                <div class="col-md-offset-1 col-md-4 margin-bottom-10">
                                    <h3 class="margin-bottom-10">QUICK ACCESS</h3>
                                    <ul class="menu">
                                        <li>
                                            <a href="index.html">HOME</a>
                                        </li>

                                        <li>
                                            <a href="about-us.html">ABOUT US</a>
                                        </li>
                                        <li>
                                            <a href="enquiry.html">QUOTE & ENQUIRY</a>

                                        </li>
                                        <li>
                                            <a href="tour-travel.html">TOUR & TRAVEL</a>
                                        </li>

                                        <li>
                                            <a href="contact-us.html">CONTACT US</a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <!-- End footer Menu -->

                                <!-- Contact Details -->
                                <div class="col-md-4 margin-bottom-10">
                                    <div class="footer_middle">
                                        <h3 class="margin-bottom-10">Contact Details</h3>
                                        <p>Suite2, 52 Station St East,
                                            <br>Harris park NSW 250, Australia
                                        </p>
                                        <p>
                                            <span>1300 699 033</span><br>
                                            <a href="mailto:info@joomla51.com">info@phoneixworldtravel.com.au</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- End Contact Details -->

                                <!-- Disclaimer -->
                                <div class="col-md-3 margin-bottom-10">
                                    <h3 class="margin-bottom-10">SOCIAL MEDIA LINKS</h3>
                                    <ul class="social-icons footer-icon">
                                        <li class="social-facebook">
                                            <a href="https://www.facebook.com/" target="_blank" title="">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-twitter">
                                            <a href="https://www.twitter.com/" target="_blank" title="">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-google-plus">
                                            <a href="https://plus.google.com/" target="_blank" title="">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-pinterest-p">
                                            <a href="https://www.pinterest.com/" target="_blank" title="">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="social-wpforms">
                                            <a href="https://www.instagram.com/?hl=en" target="_blank" title="">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>

                                    </ul>
                                    <div class="copiright">
                                        <p>Copyright &COPY; Phoenixworldtravel</p>
                                    </div>
                                </div>
                                <!-- End Disclaimer -->
                                <div class="clearfix"></div>


                               
                            </div><!--end row -->

                        </div><!--end container -->
                    </div>
                    <!-- end Footer -->
                </div><!-- End body_bg -->

                <div class="scroll-button"></div><!-- scroll-button -->

                <!-- JS -->
                <script src="assets/js/jquery.min.js" type="text/javascript"></script>
                <script src="assets/js/jquery.datetimepicker.full.js" type="text/javascript"></script>


                <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="assets/js/scripts.js" type="text/javascript"></script>
                <!-- lightbox -->
                <script src="assets/js/lightbox.js" type="text/javascript"></script>

                <!-- Mobile Menu - Slicknav -->
                <script src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
                <!--owl Carousel Slider-->
                <script src="assets/js/owl.carousel.min.js" type="text/javascript"></script>

                <!-- Sticky Div -->
                <script src="assets/js/jquery.sticky.js" type="text/javascript"></script>


                <!-- Modernizr -->
                <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
                <!-- End JS -->
                </body>
                </html>
                <script>
                    $(document).ready(function () {
                        $(".msg-body, .input-msg, .input-email, .sub-btn, .glyphicon-chevron-down").hide();
                        $(".glyphicon-chevron-up").click(function () {
                            $(".glyphicon-chevron-up").hide();
                            $(".glyphicon-chevron-down").show();
                            $(".msg-body, .input-msg, .input-email, .sub-btn").show();
                        });
                        $(".glyphicon-chevron-down").click(function () {
                            $(".glyphicon-chevron-down").hide();
                            $(".glyphicon-chevron-up").show();
                            $(".msg-body, .input-msg, .input-email, .sub-btn").hide();
                        });

                    });
                </script>
