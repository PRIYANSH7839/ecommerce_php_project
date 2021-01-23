
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="payment.css">
        <link rel="icon" href="tab.jpg" type="image/icon type">
        <!--jQuery library-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Pay Here</title>
    </head>

    <body>
		<a href="cart_page.php"><span class="glyphicon glyphicon-backward ml-5 mt-3"></span>&nbsp;Back</a> 
        <div class="padding">
            <div class="row">
                <div class="container d-flex justify-content-center" style="margin-top: 55px;">
                    <div class="col-md-6 col-sm-8">
                        <div class="card shadow">
                            <div class="card-header">
								
                                <div class="row">

                                    <div class="col-md-6">
                                        <span>CREDIT/DEBIT CARD PAYMENT</span>
                                    </div>

                                    <div class="col-md-6 text-right" style="margin-top: -5px;">

                                        <img src="https://img.icons8.com/color/36/000000/visa.png">
                                        <img src="https://img.icons8.com/color/36/000000/mastercard.png">
                                        <img src="https://img.icons8.com/color/36/000000/amex.png">


                                    </div>

                                </div>
                            </div>
                            <div class="card-body" style="height: 350px;">
							<form method="POST" action="pay_success.php">
								<div class="form-group">
                                    <label for="cc-number" class="">CARD NUMBER</label>
                                    <input type="tel" id="cc-number" class="input-lg form-control" autocomplete="off" placeholder="**** **** **** ****" data-mask="0000 0000 0000 0000" required = "true">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cc-exp">CARD EXPIRY</label>
                                            <input type="tel" id="cc-exp" class="input-lg form-control" autocomplete="off" placeholder="** / ** " data-mask="00 / 00" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cc-number">CARD CVC</label>
                                            <input type="password" id="cc-cvc" class="input-lg form-control " autocomplete="off" placeholder="***" data-mask="000" required>
                                        </div>

                                    </div>

                                </div>
                                <div class="form-group">
                                    <lebel for="numeric">CARD HOLDER NAME</lebel>
                                    <input type="text" class="input-lg form-control" required>
                                </div>
                               

                                    <button name="submit" class="btn btn-success btn-block form-control" style="font-size: .8em;">MAKE PAYMENT</button>
                                    <a href="cart_page.php" class="btn btn-danger btn-block form-control" style="font-size: .8em;">CANCEL PAYMENT</a>
                               
							</form>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    </body>

    </html>
