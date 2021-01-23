<?php
error_reporting(0);
require'db_con.php';
if ($_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before viewing your Setting!";
	header("location: error.php");
}
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$opwd = $_POST['opwd'];
	$npwd = $_POST['npwd'];
	$retypepwd = $_POST['retypepwd'];
	$query = mysqli_query($con, "SELECT password, cpassword FROM users WHERE email = '$email' AND password = '$opwd' ");
	
	$num = mysqli_fetch_array($query);
	if($email == $_SESSION['email']){
	if($num > 0){
		$up = mysqli_query($con, "UPDATE users SET password = '$npwd', cpassword = '$npwd' WHERE email = '$email'");
		$_SESSION['message'] = "Password Change Successfully";
		
	}else{
		$_SESSION['message'] = "Password does not match";
	}
	}else{
		$_SESSION['message'] = "Please Enter Registerd Email!";
	}
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="icon" href="tab.jpg" type="image/icon type">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
   
    <body class="bg-light">
		<a href="Setting.php">>> Back</a>
		<p style="color: red;"><?php echo $_SESSION['message'];?><?php echo $_SESSION['message']="";?></p>
		<a href="home.php"><div class="card shadow" style="width:51%; margin-left: 348px; margin-top: 20px;"><img src="social_icon/lifestyle.jpg" height="100"></div></a>
		 <div  class="card shadow-lg text-center mt-2" style="width:30%; margin-left: 490px;"><img src="images/Cngpwd.jpg"></div>
		 <div  class="text-center mt-5 bg-light" style="width:30%; margin-left: 490px;">
			 <form method="POST" action="">
				 <div class="form-group">
					<input class="form-control" type="email" placeholder="Registered Email" name="email"  required = "true">
                </div>
				<div class="form-group">
					<input class="form-control" type="password" placeholder="Old Password" name="opwd"  required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"  placeholder="New Password"  name="npwd" required = "true">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Re-type New Password" name="retypepwd" required = "true">
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
             </form>
		 </div>
        </div> 
    </body>
</html>


