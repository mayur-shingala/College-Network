<?php
include_once ('header1.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Contact</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
<body>
        
    <!--================ Start Header Menu Area =================-->
    
    <!--================ End Header Menu Area =================-->
        
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
            <div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="banner_content text-center">
                    <h2>Contact Us</h2>
                    <p>Platea nullam nostra laoreet potenti hendrerit laoreet enim nisl</p>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->
    
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div id="mapBox" class="mapBox" 
                data-lat="40.701083" 
                data-lon="-74.1522848" 
                data-zoom="13" 
                data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                data-mlat="40.701083"
                data-mlon="-74.1522848">
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Gujarat</h6>
                            <p>Ahmedabad</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">7046533310</a></h6>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">charitydonationp@gmail.com</a></h6>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <form id="contact-form" action="contact_p.php" method="post" enctype="multipart/form-data">

                        <div class="form-group col-sm-12 padding-right">

                            <input required="" type="text" pattern="[a-z,A-Z\s]+" placeholder="Name" required oninvalid="setCustomValidity('Numbers and Special Characters are not Allowed')" oninput="setCustomValidity('Numbers are not Allowed')" onchange="try{setCustomValidity('')} catch(e){}" class="form-control" name="name" id="name" required placeholder="Name">

                        </div>

                        <div class="form-group col-sm-12 padding-left">

                            <input type="email" class="form-control" name="email" id="mail" required="" placeholder="Email">

                        </div>

                        <div class="form-group col-sm-12 no-padding">

                            <input type="text" class="form-control" required="" name="subject" id="website" placeholder="Subject">

                        </div>

                        <div class="form-group col-sm-12 no-padding">

                            <textarea class="form-control" name="message" required="" id="comment" placeholder="Message"></textarea>

                        </div>

                        <div class="col-sm-12 button no-padding">

                            <input type="submit" onclick="return confirm('Do you want to Contact Us?');" id="submit_contact" class="btn btn-default" value="Send Message" name="submit_contact">

                            <div id="msg" class="message"></div>

                        </div>
                        
                    </form>

                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
        
	<!--================ Start Subscribe Area =================-->
	<!-- <div class="container">
            <div class="subscribe_area">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center">
                            <h1 class="text-white">Do you have a question?</h1>
                            <div id="mc_embed_signup">
                                <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                        <input name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                        <button class="ml-10 primary_btn yellow_btn btn sub-btn rounded">SUBSCRIBE</button>		
                                    </div>									
                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div> -->
    <!--================ End Subscribe Area =================-->
        
    <!--================ Start footer Area  =================-->	
<?php
include_once ('footer.php');
?>
    <!--================ End footer Area  =================-->
    
    <!--================Contact Success and Error message Area =================-->
    <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>Your message is successfully sent...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Modals error -->
    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div>
    <!--================End Contact Success and Error message Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>