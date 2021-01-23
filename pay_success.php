<?php
include("db_con.php");
?>
<?php
if(isset($_POST["submit"]))
{
	header("location: success_payment.php");
}
else
{
	$_SESSION['message'] = "Please Enter Correct Detail!";
	header("location: error.php");
}
?>
