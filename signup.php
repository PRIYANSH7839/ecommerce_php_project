<?php
require 'db_con.php';
?>

<?php
if(isset($_POST['submits']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

}
if($password === $cpassword)
{
//email already exist in a database
$res = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'") or die(mysqli_error($con));
if (mysqli_num_rows($res) > 0 ) {
    $_SESSION['message'] = 'User with this email already exists!';
    header("location: error.php");
}
else { // Email doesn't already exist in a database, proceed...

    $sql = "INSERT INTO users(name, email, password, cpassword) VALUES ('$name', '$email', '$password', '$cpassword')";
    if ( mysqli_query($con,$sql) ){

        $_SESSION['active'] = 1; //0 until user activates their account with verify.php
        $_SESSION['logged_in'] = true; // So we know the user has logged in
        $q = mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
        $user = $q->fetch_assoc();
        $_SESSION['sessCustomerID'] = $user['id'];
        header("location: profile.php");
    }
    else {
        $_SESSION['message'] = 'Registration failed!';
        header("location: error.php");
    }
}
}else{
	$_SESSION['message'] = 'Password Did not Match';
        header("location: error.php");
}

?>
