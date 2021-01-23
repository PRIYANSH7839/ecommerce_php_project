<?php 
require_once 'db_con.php';
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: error.php");
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Welcome</title>
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
	.temp{
		height: 200px;
		width: 40%;
		margin: 200px 0 0 300px;
	}
	.para{
		font-size: 25px;
	}
	.img{
		margin-bottom: 0px;
		margin-top: 20px;
	}
</style>

<body>
  <div class="form container ">
		
		<div class="temp shadow-lg">
		  <center><img src="tab.jpg" class="img"></center>
          <h1 class="text-center">Welcome</h1>
		  <p class="text-danger text-center para mb-5">Your Registration Successfully!</p>
          <a href="index.php" class="btn btn-primary btn-block ">Login</button></a>
		</div>
    </div>
</body>
</html>

























