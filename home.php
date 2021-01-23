<?php
error_reporting(0);
require 'db_con.php';
include('header.php');
if ($_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before viewing your home page!";
	header("location: error.php");
}
?>
<!--CROUSAL-->

<div class="container" style=" border: 1px solid black height:350px;  margin-top: 65px;">
	<script src="item_slide1.js"></script>
		<a href="products.php"><img name="slide" width="100%" height="350"></a>
</div>

 <!--Card-->
<div class="container mt-2 ">
		<div class="row">
		<div class="col-md-6 col-sm-6">
			<div class="thumbnail">
				<a href="products.php">
					<img src="images2\6.jpg" alt="alt"/ style="height: 400px; width: 100%;">
				</a>
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="thumbnail">
				<a href="products.php">
					<img src="images2\7.jpg" alt="alt"/ style="height: 400px; width: 100%;">
				</a>
			</div>
		</div>
	</div> 
</div>

<!--Horiantal show products -->
<div class="container">
	<div class="panel panel-default mb-0">
		<div class="panel-heading">Today's Deals</div>
		<div class="panel-body">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <div class="row text-center">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\2.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Sony DSLR</h3>
								<p>Price: Rs.40000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\3.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Sony DSLR</h3>
								<p>Price: Rs.50000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\4.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Olympus DSLR</h3>
								<p>Price: Rs.80000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\5.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Cannon EOS</h3>
								<p>Price: Rs.36000.00</p>
							</div>
						</div> 
					</div>
				</div>
			</div>
				<div class="carousel-item">
				 <div class="row text-center">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\25.jpg" alt="alt"/ style="height: 158px">
								</a>
							<div class="caption">
								<h3>Jhon Zok</h3>
								<p>Price: Rs.1599.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\1.jpg" alt="alt"/ style="height: 158px">
								</a>
							<div class="caption">
								<h3>Sony DSLR</h3>
								<p>Price: Rs.40000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\22.jpg" alt="alt"/ style="height: 158px">
								</a>
							<div class="caption">
								<h3>H & W</h3>
								<p>Price: Rs.800.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\9.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Titan Model #301</h3>
								<p>Price: Rs.40000.00</p>
							</div>
						</div> 
					</div>
				</div>
				</div>
				<div class="carousel-item">
				  <div class="row text-center">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\10.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Titan Model #201</h3>
								<p>Price: Rs.40000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\11.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>HMT Milan</h3>
								<p>Price: Rs.40000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\12.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Faber Luba #111</h3>
								<p>Price: Rs.40000.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\13.jpg" alt="alt"/  style="height: 158px">
								</a>
							<div class="caption">
								<h3>Luis Phil</h3>
								<p>Price: Rs.1000.00</p>
							</div>
						</div> 
					</div>
				</div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </a>
			</div>
		</div>
	</div>
</div>

<!--Horiantal show products end -->

<div class="container mt-2" style="height: 205px; width: 100%; margin-bottom: 0;" >
	<div class="card">
		<a href="products.php">
			<img src="images2\8.jpg" alt="alt"/ height="208px" width="100%">
		</a>
	</div>
</div>


<div class="container mt-1" style="  height: 290px; width: 100%;">
	<div class="card">
		<a href="products.php">
			<img src="images2\9.jpg" alt="alt"/ height="208px" width="100%">
		</a>
	</div>
</div>

<!--Horiantal show products -->
<div class="container"  style="margin-top: 0;">
	<div class="panel panel-default">
		<div class="panel-heading">Best Deals</div>
		<div class="panel-body">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
				  <div class="row text-center">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\2.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>WCOMBO</h3>
								<p>Price: Rs.2999.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\8.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Black Combo</h3>
								<p>Price: Rs.899.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\21.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>T-Shirt #SKY</h3>
								<p>Price: Rs.399.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\20.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>WHT SHIRT</h3>
								<p>Price: Rs.699.00</p>
							</div>
						</div> 
					</div>
				</div>
			</div>
				<div class="carousel-item">
				 <div class="row text-center">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\17.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>T-Shirt #fff</h3>
								<p>Price: Rs.399.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\13.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Red T</h3>
								<p>Price: Rs.1999.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\14.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>BLACK CLOT</h3>
								<p>Price: Rs.599.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\16.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>#wht JACKET</h3>
								<p>Price: Rs.299.00</p>
							</div>
						</div> 
					</div>
				</div>
				</div>
				<div class="carousel-item">
				  <div class="row text-center">
						<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images2\3.jpg" alt="alt"/style="height: 138px">
								</a>
							<div class="caption">
								<h3>Waal Art</h3>
								<p>Price: Rs.599.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images1\25.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Jhon Zok</h3>
								<p>Price: Rs.1500.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images\7.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Watch WRIST</h3>
								<p>Price: Rs.1500.00</p>
							</div>
						</div> 
					</div>
					<div class="col-md-3 col-sm-6">
							<div class="thumbnail">
								<a href="products.php">
									<img src="images2\2.jpg" alt="alt"/>
								</a>
							<div class="caption">
								<h3>Home DEC</h3>
								<p>Price: Rs.25000.00</p>
							</div>
						</div> 
					</div>
				</div>
				</div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </a>
			</div>
		</div>
	</div>
</div>

<!--Horiantal show products end -->
<?php
include('footer.php');
?>
