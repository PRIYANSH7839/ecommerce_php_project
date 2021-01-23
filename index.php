<?php
require 'db_con.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="icon" href="tab.jpg" type="image/icon type">
    <title>Lifestyle Store</title>
</head>

<body>
    <div class="cont">
		<form method="POST" action="login.php" autocomplete="off">
        <div class="form sign-in">
            <h2>Sign In</h2>
            <label>
                <span>Email Address</span>
                <input type="email" name="email">
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password">
            </label>
            <button class="submit" type="submit" name="submits">Sign In</button>
            <p class="forgot-pass">Forgot Password ?</p>


            <div class="social-media">
                <ul>
                    <li><img src="social_icon\facebook.png"></li>
                    <li><img src="social_icon\instagram.png"></li>
                    <li><img src="social_icon\twitter.png"></li>
                    <li><img src="social_icon\youtube.png"></li>
                </ul>
            </div>
        </div>
        </form>

        <div class="sub-cont">
            <div class="img">
                <div class="img-text m-up">
                    <h2>New here?</h2>
                    <p>Sign up and discover great amount of new oppotunities!</p>
                </div>
                <div class="img-text m-in">
                    <h2>One of us?</h2>
                    <p>If you already has an account, just signin. We've missed you!</p>
                </div>

                <div class="img-btn">
                    <span class="m-up">Sign Up</span>
                    <span class="m-in">Sign In</span>
                </div>

            </div>
            <form method="POST" action="signup.php" autocomplete="off">
				<div class="form sign-up">
					<h2>Sign Up</h2>
					<label>
						<span>Name</span>
						<input type="text" name="name">
					</label>
					<label>
						<span>Email</span>
						<input type="email" name="email">
					</label>
					<label>
						<span>Password</span>
						<input type="password" name="password">
					</label>
					<label>
						<span>Confirm Password</span>
						<input type="password" name="cpassword">
					</label>

					<button type="submit" class="submit" name="submits">Sign Up Now</button>
				</div>
            </form>
        </div>

    </div>

    <script type="text/javascript" src="script.js"></script>
</body>

</html>
