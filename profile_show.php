<?php
 include 'db_con.php';
 error_reporting(0);
 if ($_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before viewing your profile page!";
	header("location: error.php");
}
if(isset($_SESSION['email'])){
	$sql = "SELECT * FROM users WHERE email='$_SESSION[email]'";
	$query = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($query);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?= $row['name'];?> Profile</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="index.css" rel="stylesheet" type="text/css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="icon" href="tab.jpg" type="image/icon type">
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
	<style>
		.box{
			width: 50%;
			height: 400px;
			margin: 80px 0 0 310px;
			padding: 10px;
		}
		.innerdiv{
			width: 100%;
			height:17%;
			margin-left: 0px;
			
		}
		.innerdivb{
			border: 1px solid black;
			width:98%;
			
		}
		.login-css {
			border: none;
			height: 100%;
			
		}
		.lbl{
			font-size: 28px;
		}
	</style>
    <body class="bg-light">
			<div class="card box shadow-lg" style="margin-left: 20px;">
			<div class="innerdiv row shadow-lg bg-light">
				<img src="tab.jpg" >
				<h2 style="color: Green;margin-left: 50px; margin-top: -40px;"><b><?= $row['name']?> Profile</b></h2>
			</div>
			<div class="row bg-light shadow" style="margin-right:0px; margin-left: 0px; margin-top: 10px;">
						<div class="login-css container " style="text-align: center;">
							<form>
								<div class="form-group">
									<label class="lbl text-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name : <?= $row['name']?> </label>
								</div>
								<div class="form-group">
									<label class="lbl text-danger">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email : <?= $row['email']?></label>
								</div>
							</form>
					   </div>
			</div>
		</div>
    </body>
</html>
