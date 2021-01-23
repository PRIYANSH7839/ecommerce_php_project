<?php
require_once 'db_con.php';
if ($_SESSION['logged_in'] != 1 ) {
	$_SESSION['message'] = "You must log in before viewing your Cart page!";
	header("location: error.php");
}

// add, remove, empty
if (!empty($_GET['action'])) {
    switch ($_GET['action']) {
        // add product to cart
        case 'add':
            if (!empty($_POST['quantity'])) {
                $pid = $_GET['pid'];
                $query = "SELECT * FROM products WHERE id=" . $pid;
                $result = mysqli_query($con, $query);
                while ($product = mysqli_fetch_array($result)) {
                    $itemArray = [
                        $product['code'] => [
                            'name' => $product['name'],
                            'code' => $product['code'],
                            'quantity' => $_POST['quantity'],
                            'price' => $product['price'],
                            'image' => $product['image']
                        ]
                    ];
                    if (isset($_SESSION['cart_item']) &&!empty($_SESSION['cart_item'])) {
                        if (in_array($product['code'], array_keys($_SESSION['cart_item']))) {
                            foreach ($_SESSION['cart_item'] as $key => $value) {
                                if ($product['code'] == $key) {
                                    if (empty($_SESSION['cart_item'][$key]["quantity"])) {
                                        $_SESSION['cart_item'][$key]['quantity'] = 0;
                                    }
                                    $_SESSION['cart_item'][$key]['quantity'] += $_POST['quantity'];
                                }
                            }
                        } else {
                            $_SESSION['cart_item'] += $itemArray;
                        }
                    } else {
                        $_SESSION['cart_item'] = $itemArray;
                    }
                }
                header('location: products.php');
            }
            break;
        case 'remove':
            if (!empty($_SESSION['cart_item'])) {
                foreach ($_SESSION['cart_item'] as $key => $value) {
                    if ($_GET['code'] == $key) {
                        unset($_SESSION['cart_item'][$key]);
                    }
                    if (empty($_SESSION['cart_item'])) {
                        unset($_SESSION['cart_item']);
                    }
                }
            }
            break;
        case 'empty':
            unset($_SESSION['cart_item']);
            break;
    }
}


?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="icon" href="tab.jpg" type="image/icon type">
    <title>Cart</title>
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

	  
	</br>
	</br>  
	  </br>  
	  </br>  
	<a href="products.php"><span class="glyphicon glyphicon-backward ml-5"></span>&nbsp;Products</a>  
	  
	  
	  
    <div class="container py-5" style="margin-bottom: 200px;">
    <div class="d-flex justify-content-between mb-2">
        <h3>Cart</h3>
        <a class="btn btn-danger" href="cart_page.php?action=empty" style="height: 40px">All Item Remove</a>
    </div>
    <div class="row table-responsive">
        <?php
            $total_quantity = 0;
            $total_price = 0;
        ?>
        <table class="table table-striped">
            <tbody>
            <tr>
				<th class="text-left">Image</th>
                <th class="text-left">Item Name</th>
                <th class="text-left">Item Code</th>
                <th class="text-right">Quantity</th>
                <th class="text-right">Item Price</th>
                <th class="text-right">Price</th>
                <th class="text-center">Remove</span></th>
            </tr>
            <?php
            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                foreach ($_SESSION['cart_item'] as $item) {
                    $item_price = $item['quantity'] * $item['price'];
                    ?>
                    <tr>
                        <td class="text-left">
                            <img src="<?= $item['image'] ?>" alt="<?= $item['name'] ?>" class="img-fluid" width="100">
                        </td>
                        <td class="text-left"> <?= $item['name'] ?></td>
                        <td class="text-left"><?= $item['code'] ?></td>
                        <td class="text-right"><?= $item['quantity'] ?></td>
                        <td class="text-right">₹<?= number_format($item['price'], 2) ?></td>
                        <td class="text-right">₹<?= number_format($item_price, 2) ?></td>
                        <td class="text-center">
                          <a href="cart_page.php?action=remove&code=<?= $item['code']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>

                    <?php
                    $total_quantity += $item["quantity"];
                    $total_price += ($item["price"]*$item["quantity"]);
                }
            }

            if (isset($_SESSION['cart_item']) && !empty($_SESSION['cart_item'])){
                ?>
                <tr>
					<td></td>
					<td></td>
					<td ><strong>Total:</strong></td>
                    <td align="right"><strong><?= $total_quantity ?></strong></td>
                    <td ></td>
                    <td align="right"><strong>₹<?= number_format($total_price, 2); ?></strong></td>
                    <td align="right"><a class="btn btn-success" href="pay.php" style="height: 35px">Pay now</a></td>
                </tr>

            <?php }

                ?>
                
                
            </tbody>
        </table>
        
    </div>
    
</div>

</br>

 </br>
 
 </br>
 </br>
 


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

<?php include('footer.php')?>


