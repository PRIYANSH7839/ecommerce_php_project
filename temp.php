   <!-- first done this 
    
    
    
   <div class="row">
         <div class="col-md-16">
            <div class="jumbotron" style="margin-top: 80px;">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
have all in one place.”</p>
            </div>
            <div class="">
                <div class="card-deck" style="">
                    <?php
                    $query = "SELECT * FROM products";
                    $product = mysqli_query($con, $query);
                    if (!empty($product)) {
                        while ($row = mysqli_fetch_array($product)) { ?>
                            <form action="cart_page.php?action=add&pid=<?= $row['id']; ?>" method="post">
                                <div class="card" style="width:20% ;float: left; margin-left: 5px;">
                                    <img class="card-img-top"
                                         src="<?= $row['image']; ?>"
                                         alt="<?= $row['name']; ?>"
                                         width="150">
                                    <div class="card-header d-flex justify-content-between">
                                        <span><?= $row['name']; ?></span>
                                        <span>₹<?= number_format($row['price'], 2); ?></span>
                                    </div>
                                    <div class="card-body d-flex justify-content-between">
                                        <input type="text" name="quantity" value="1" size="2">
                                        <input type="submit" value="Add to Cart" class="btn btn-success btn-sm">
                                    </div>
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
</div>-->
