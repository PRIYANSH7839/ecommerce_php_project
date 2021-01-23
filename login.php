<?php
require 'db_con.php';
?>


<?php
/* User login process, checks if user exists and password is correct   */
 $email = $_POST['email'];
 $password = $_POST['password'];
 $res = mysqli_query($con, "SELECT * FROM users WHERE email='$email'");
 $user = mysqli_fetch_assoc($res);
 $check =  $user['password'];

if ( mysqli_num_rows($res) == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
    header("location: error.php");
}
else { // User exists admin@eshop.com
	if ( $password == $check) {
        $_SESSION['email'] = $user['email'];
        $_SESSION['password'] = $user['password'];
        // set customer ID in session
        $_SESSION['sessCustomerID'] = $user['id'];
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        if ($_SESSION['email']==="admin@eshop.com") {
          header("location: admin.php");
        }
        else{
          header("location: home.php");
	  }
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        header("location: error.php");
    }
 }

/*
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         $_SESSION['email'];
         $_SESSION['login_user'] = $email;
         
         header("location: admin.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
      * */
?>
