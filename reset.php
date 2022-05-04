<?php require_once "controllerUserData.php"; ?>
<?php
$email = $_SESSION['email'];
if($email == false){
  header('Location: login1.php');
}

// if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
// 	$id=$_SESSION['user_id'];
// 	$otp = $_POST['otp'];
// 	$nPass = $_POST['newpassword'];
// 	$cPass = $_POST['cpassword'];
	
// 	if ($nPass != $cPass) {
// 		echo "password must be same";
// 		exit;
// 	}
// 	$query1 = "select * from login where Email='".$id."'";

	
// 	$result1 = mysqli_query($conn, $query1);

	
// 	$row=mysqli_fetch_assoc($result1);

// 	$o=$row['otp'];

	

// 	if ($o==$otp) {

// 		mysqli_query($conn, "UPDATE login set otpused = 1,Password = '".$nPass."' where Email='".$id."' and 
// 	otp = '".$otp."' ");
//         mysqli_query($conn, "UPDATE login set Password='" . $nPass . "' WHERE Email='".$id."'");
//         exit();

// 		$query = "update user set otpused = 1, 
// 	password = '".$nPass."' where username='".$id."' and 
// 	otp = '".$otp."' ";
// 	var_dump($query);exit();
	
// 	$result = mysqli_query($conn, $query);

	
// 	if ($result) {
		
// 		echo "		<script>
// 						alert('Password Sucessfully Reset !');
// 						window.location='login1.php';
// 					</script>";
// 	}
// 	else
// 	{
// 		$msg="<p><b> <font color=red> Invalid OTP!</font></b></p>";
	
// 	}
	
// }
?>
<?php
include_once('header1.php');
?>
<html>
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
<!--Breadcrumb-->
<body>
   
     <section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="login-box">
				<h2>Code Verification</h2>
				<form id="contact-form" method="post" action="reset.php" autocomplete="off"> 	
                    <?php 
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center" style="padding: 0.4rem 0.4rem">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
					<div class="user-box">
						<input type="number" name="otp" required>
						<label>Enter otp code</label>
					</div>
						<input type="submit" style="width: 100px;" class="btn btn-primary submit_email login_button" name="check-reset-otp" value="submit">
					</form>
				</div>
			</div>
		</div>
	</section>
<?php
include_once ('footer.php');
?>
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