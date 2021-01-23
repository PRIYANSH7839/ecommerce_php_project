<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
     <link rel="stylesheet" href="css/error.css">
     <!--jQuery library--> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <!--Latest compiled and minified JavaScript--> 
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
     <link rel="icon" href="tab.jpg" type="image/icon type">
    <title>Logout</title>
</head>
<body>
    <div class="cont container-fluid">
		<div class="form">
          <h3 style="font-size: 80px; font-weight: 100; border: none; width: 100%; height: 10%; margin: auto; text-align: center; color: #fff; margin-top: 80px; margin-bottom: 20px;">Thanks for shopping by</h3>
           <h4 style="font-size: 80px; font-weight: 100; border: none; width: 100%; height: 10%; margin: auto; text-align: center; color: #fff; margin-top: 0px; margin-bottom: 10px;">Lifestyle Store</h4>   
          <p><?= 'You have been logged out!'; ?></p>
            <a href="index.php"><button class="btn" style="background: -webkit-linear-gradient(left, #4b9fe1, #6ebce5);"><h5>Home</h5></button></a>
         

    </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <script type="text/javascript" src="script.js"></script>
</body>
</html>
