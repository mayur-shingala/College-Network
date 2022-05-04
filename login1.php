<?php
session_start();

        $message="";
        if(count($_POST)>0)
        {
            include('config.php');
            if(isset($_POST['login']))
            {
    			$uname=$_POST['username'];
    			$password=$_POST['password'];
    
   				$result=mysqli_query($conn,"select * from login where Email='".$uname."'AND Password='".$password."'");
    			// $result=mysqli_query($conn,$sql);
    			$row = mysqli_fetch_array($result);
    			$_SESSION['role']=$row['Role_id'];

    			if($uname == $row['Email'])
            	{
            		$_SESSION["username"] = $row['Email'];
            		$_SESSION["user_id"] = $row['Lid'];
                	$id=$_SESSION["user_id"];
    
    				if($_SESSION['role']==1)
                	{
                		header("Location:http://localhost/adminpanel/HTML/indexp.php");
                    	
                	}
                	elseif($_SESSION['role']==2)
                	{
                    	header("Location:Profile_faculty.php");
                	}
                	elseif($_SESSION['role']==3)
                	{
                    	header("Location:Profile.php");
                	}
            	}
    			else
    			{
        			$message = "Invalid username or password";
    			}
			}
		}
?>
            <!-- $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $result = mysqli_query($conn,"SELECT * FROM login WHERE Email='$username' AND Password ='$password'");
            $row = mysqli_fetch_array($result);
            $_SESSION['role']=$row['role_id'];
            // $_SESSION['id']=$row['user_id'];
            // $id=$_SESSION['id'];
            // if(isset($_SESSION['id']))
            // {
            // 	mysqli_query($conn,"UPDATE user SET status=1 WHERE user_id='$id'");
            // }
            if($username==$row['username'])
            {
            	// $_SESSION["username"] = $row['username'];
             //    $_SESSION["user_id"] = $row['user_id'];
             //    $id=$_SESSION["user_id"];
                //echo $_SESSION["username"];
                
                if($_SESSION['role']==3)
                {
                    header("Location:Profile.php");
                }
                // elseif($_SESSION['role']==2)
                // {
                //     header("Location:index2.php");
                // }
                // elseif($_SESSION['role']==3)
                // {
                //     header("Location:http://localhost/adminpanel/HTML/indexp.php");
                // }

            }
            else
            {
                $message = "Invalid username or password";
            }
        }
    // close connection
    
?> -->
<?php
include_once('header1.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>College Network</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
<body>
        
	<!--================ Start Header Menu Area =================-->
	
	<!--================ End Header Menu Area =================-->	
	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">


<div class="login-box">
  <h2>Login</h2>
  <form id="Login" method="post" action="">
  	<div class="message" style="margin-bottom:5px; color:red; ">
          <?php 
                if($message!="") 
                { 
                  echo $message; 
                }
          ?>
        </div>
    <div class="user-box">
      <input type="text" name="username" required="">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <label>Password</label>
    </div>
    <button type="login" style="width: 100px;" class="btn btn-primary" name="login" href="index1.php">Login</button>
    <div class="">
    	<a href="forgot.php">Forgot password?</a>
    </div>
  </form>
</div>



				<!-- <div class="banner_content">
				<form id="Login" method="post" action="">
					<div class="message" style="margin-bottom:5px; color:red; ">
          <?php 
                if($message!="") 
                { 
                  echo $message; 
                }
          ?>
        </div>
        		<h1 style="color:white;">Login Form</h1><br>
     		    <div class="form-group">
            	<input type="email" class="" name="username" id="inputEmail" placeholder="Email Address" required="">

        </div>
        <div class="form-group">
            <input type="password" class="" name="password" id="inputPassword" placeholder="Password" required="">
        </div>

      <button class="btn btn-primary btn-lg" style="width: 190px" type="login" name="login" href="index1.php">Login</button><br>
        <a href="signup.php" class="signbtn">Register Here</a>
    
    	<div class="">
        <a href="forgot.php" style="width: 200px">Forgot password?</a>
      </div>    
    </form>
    </div> -->

</div></div></div>

				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	
	<!--================ Start Causes Area =================-->
	<!--================ Start Recent Event Area =================-->
	<!-- <section class="event_area section_gap_custom">
		<div class="container">
			<div class="main_title">
				<h2>Upcoming events</h2>
				<p>Creepeth called face upon face yielding midst is after moveth </p>
			</div>
		
			<div class="row">
				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e1.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Working syrian childreen</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv1">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e2.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Help and homelesness</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv2">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e3.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Save the clean water</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv3">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e4.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Foods for poor childreen</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv4">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	================ End Recent Event Area =================

	================Team Area =================
	<section class="team_area section_gap">
		<div class="container">
			<div class="main_title">
				<h2>Meet our voluteer</h2>
				<p>Creepeth called face upon face yielding midst is after moveth </p>
			</div>
			<div class="row team_inner">
				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v1.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Alea Mirslava</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v2.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Adam Virland</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v3.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Adam Virland</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v4.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Adam Virland</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	================End Team Area =================

	================ Start CTA Area =================
	<div class="cta-area section_gap overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<h1>Become a volunteer</h1>
					<p>
						So seed seed green that winged cattle in. Gathering thing made fly you're 
						divided deep leave on the medicene moved us land years living.
					</p>
					<a href="#" class="primary_btn yellow_btn rounded">join with us</a>
				</div>
			</div>
		</div>
	</div>
	 --><!--================ End CTA Area =================-->

	<!--================ Start Story Area =================-->
	<!-- <section class="section_gap story_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Our latest Story</h2>
						<p>
							Open lesser winged midst wherein may morning
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				single-story 
				<div class="col-lg-4 col-md-6">
					<div class="single-story">
						<div class="story-thumb">
							<img class="img-fluid" src="img/story/s1.jpg" alt="">
						</div>
						<div class="story-details">
							<div class="story-meta">
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									20th Sep, 2018
								</a>
								<a href="#">
									<span class="lnr lnr-book"></span>
									Company
								</a>
							</div>
							<h5>
								<a href="#">
									Lime recalls electric scooters over 
									battery fire.
								</a>
							</h5>
						</div>
					</div>
				</div>

				single-story 
				<div class="col-lg-4 col-md-6">
					<div class="single-story">
						<div class="story-thumb">
							<img class="img-fluid" src="img/story/s2.jpg" alt="">
						</div>
						<div class="story-details">
							<div class="story-meta">
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									20th Sep, 2018
								</a>
								<a href="#">
									<span class="lnr lnr-book"></span>
									Company
								</a>
							</div>
							<h5>
								<a href="#">
									Apple resorts to promo deals 
									trade to boost 
								</a>
							</h5>
						</div>
					</div>
				</div>

				 single-story 
				<div class="col-lg-4 col-md-6">
					<div class="single-story">
						<div class="story-thumb">
							<img class="img-fluid" src="img/story/s3.jpg" alt="">
						</div>
						<div class="story-details">
							<div class="story-meta">
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									20th Sep, 2018
								</a>
								<a href="#">
									<span class="lnr lnr-book"></span>
									Company
								</a>
							</div>
							<h5>
								<a href="#">
									Lime recalls electric scooters over 
									battery fire.
								</a>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================ End Story Area =================-->

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
	<script src="js/countdown.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>