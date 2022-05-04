<?php
include_once 'header1.php';
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
<?php 
 if(isset($_POST['submit']))
 {
 	extract($_POST);
 	if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname))
	{
      $ferror = 'Only characters are allowed.';
    }

	if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname))
	{
      $lerror = 'Only characters are allowed.';
    }

    if(!preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $mobile))
    {
      $merror = 'Please enter a valid mobile number.';
    }  

	include_once 'config.php';
    $sql="select * from login where email='$email';";
    $res=mysqli_query($conn,$sql);
    if (mysqli_num_rows($res) > 0) 
    {
	   $row = mysqli_fetch_assoc($res); 
       if($email==$row['Email'])
       {
            $eerror ='Email alredy Exists.';
       } 
    } 

	if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $password ))
	{
		$perror = 'Your password is Strong.';
	}
	else
	{
	   $perror = 'Password must contain uppercase , lowercase, symbol and numeric.';
	}
		
	if($password != $cpassword)
    {
    	$cerror = 'Passwords does not matched.';
    }

    if(!isset($ferror,$lerror,$merror,$eerror,$cerror))
    {
    	$q="SELECT * FROM role where role='faculty'";
	    $a=mysqli_query($conn,$q);
	    $b=mysqli_fetch_array($a);
	    $role_id=$b['Role_id'];

	    $sq="INSERT INTO login (Email,Password,Role_id) values ('$email','$password','$role_id')";
	    $result= mysqli_query($conn, $sq);
	    $user_id=mysqli_insert_id($conn);	    

	    $sql = "INSERT INTO faculty (Fname,Lname,Gender,M_no,Email,Password,C_password,Lid,Role_id) VALUES ('$fname','$lname','$gender','$mobile','$email','$password','$cpassword','$user_id','$role_id')";
	    if($result=mysqli_query($conn, $sql))
	    {
	        $done=2;
	    } 
	    else
	    {
	        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	    }
    }
 }
 ?>
	<section class="home_banner_area">

		<div class="banner_inner">
			<div class="container">
				<div class="banner_inner">    
  <div class="login-box">
  	<?php if(isset($done)) 
      { ?>
    <div class="successmsg">
    	<span style="font-size:20px; color:#24e516">You have registered successfully.</span><br>
    	<div class="">
    		<a href="login1.php">Login here... </a>
    	</div>
    </div>
    <?php } else { ?>
  <h2>Sign Up</h2>
  <form method="post" action="" onsubmit="return validate()">
    <div class="user-box">
      <input type="text" name="fname" required="">
      <?php 
		  if(isset($ferror))
		  {
		   	echo '<h6 class="errmsg" style="color:red">'.$ferror.' </h6>'; 
		  }
      ?>
      <label>First Name</label>
    </div>
    <div class="user-box">
      <input type="text" name="lname" required="">
      <?php 
		  if(isset($lerror))
		  {
		   	echo '<h6 class="errmsg" style="color:red">'.$lerror.' </h6>'; 
		  }
      ?>
      <label>Last Name</label>
    </div>
    <div>
    	<label style="font-size: 18px; color: white">Gender:</label>
    	<input type="radio"  name="gender" id="gender" value="Male" required="">Male
    	<input type="radio"  name="gender" id="gender" value="Female" required="">Female
    	<input type="radio"  name="gender" id="gender" value="Other" required="">Other
	</div>
    <div class="user-box">
      <input type="text" name="mobile" required="">
      <?php 
		  if(isset($merror))
		  {
		   	echo '<h6 class="errmsg" style="color:red">'.$merror.' </h6>'; 
		  }
      ?>
      <label>Mobile No.</label>
    </div>
    <div class="user-box">
      <input type="email" name="email" required="">
      <?php 
		  if(isset($eerror))
		  {
		   	echo '<h6 class="errmsg" style="color:red">'.$eerror.' </h6>'; 
		  }
      ?>
      <label>Email</label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
      <?php 
		  if(isset($perror))
		  {
		   	echo '<h6 class="errmsg" style="color:red">'.$perror.' </h6>'; 
		  }
      ?>
      <label>Password</label>
    </div>
    <div class="user-box">
      <input type="password" name="cpassword" required="">
      <?php 
		  if(isset($cerror))
		  {
		   	echo '<h6 class="errmsg" style="color:red">'.$cerror.' </h6>'; 
		  }
      ?>
      <label>Confirm Password</label>
    </div>
    <button type="submit" style="width: 100px;" class="btn btn-primary" id="submit" name="submit">Submit</button>
  </form>
 <?php } ?>
</div>
</div>
	</div>
	</div>
	</section>	
<?php
include_once ('footer.php');
?>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/countdown.js"></script>
        <!-- contact js -->
        <!-- <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/signup.js"></script>     -->
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>