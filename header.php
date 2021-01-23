<?php
 include 'db_con.php';
 error_reporting(0);
if(isset($_SESSION['email'])){
	$sql = "SELECT * FROM users WHERE email='$_SESSION[email]'";
	$query = mysqli_query($con,$sql);
	$row=mysqli_fetch_array($query);
}
?>						
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="tab.jpg" type="image/icon type">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	
    <title>Lifestyle Store</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top" style="margin-bottom:0;  background: -webkit-linear-gradient(left, #330000,#0f2557);">
		<a class=" navbar-brand" href="home.php"><span class="glyphicon glyphicon-home active"></span></a>
		<a class="navbar-brand" href="#">Lifestyle Store </a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
            <span class="icon-bar"></span>
		</button>
        <div class="collapse navbar-collapse " id="mynav" bg-light>
			
			<div class="navbar-nav navbar-right">
				<li class="nav-item">
					
					<a class=" navbar-brand" href="#"><span class="glyphicon glyphicon-search"></span></a>
					<a class=" navbar-brand" href="profile_show.php"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $row['name']; ?></a>
			
					
					<a class=" navbar-brand" href="cart_page.php"><span class="glyphicon glyphicon-shopping-cart"></span></a>
					<li class="nav-item dropdown">
					<a class="navbar-brand nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="margin-right: 30px;">
					</a>
					
					<div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
						<a class="dropdown-item text-primary" href="logout.php" style="background: #0f2557;" ><span class="glyphicon glyphicon-log-out"></span> Logout </a>
						<a class="dropdown-item text-primary" href="setting.php" style="background: #0f2557;"><span class="glyphicon glyphicon-cog"></span> Settings </a>
                    </div>
				</li>
			</div>
		</div>
	</nav>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

