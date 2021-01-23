<?php
require_once 'db_con.php' ;

if ($_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before viewing your products page!";
	header("location: error.php");
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags >-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="tab.jpg" type="image/icon type">

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <title>Products</title>
  </head>
  <body>
	    <nav class="navbar navbar-expand-lg navbar-inverse navbar-fixed-top" style="margin-bottom:0;  background: -webkit-linear-gradient(left, #330000,#0f2557);">
		<a class=" navbar-brand" href="home.php"><span class="glyphicon glyphicon-home"></span></a>
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
					<a class=" navbar-brand" href="profile_show.php"><span class="glyphicon glyphicon-user"></span></a>
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
	  
	  
	  
	  
	  
    <div class=" shadow-lg container py-5">
		<div class="jumbotron" style="margin-top: 60px;">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.”</p>
            </div>
		<div class="row">
        <div class="col-md-12">
            <h1>Products List</h1>
            <div class="d-flex">
                <div class="card-deck">
                    <?php
                    $query = "SELECT * FROM products";
                    $product = mysqli_query($con, $query);
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) { ?>
                            <form action="cart_page.php?action=add&pid=<?= $row['id']; ?>" method="post">
                                <div class="card h-auto mb-4" style="width: 25rem;">
                                    <img class="card-img-top"
                                         src="<?= $row['image']; ?>"
                                         alt="<?= $row['name']; ?>"
                                         width="150">
                                    <div class="card-header text-center justify-content-between">
                                        <span><h3><?= $row['name']; ?></h3></span>
                                        <span>₹<?= number_format($row['price'], 2); ?></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between" >
                                        <input type="number" name="quantity" value="1" size="2" style="height: 40px; width: 40px;">
                                        <input type="submit" value="Add to Cart" class="btn btn-success" style="height: 40px; width: 70%;">
                                    </div>
                                </div>
                            </form>
                        <?php }
                    } else {
                        echo "no products available";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

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

<?php
include('footer.php');
?>
