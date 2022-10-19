<?php 
require 'conn/conn.php';
require 'css.php';


if(isset($_POST['submit'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$code = $_POST['code'];
	$phoneno = $_POST['phoneno'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$zip = $_POST['zip'];
	$bloodgroup = $_POST['bloodgroup'];
	$occupation = $_POST['occupation'];
	$priordonor = $_POST['priorDonor'];
	$disease = $_POST['disease'];
	$allergy = $_POST['allergy'];

	$query = "INSERT INTO `damuform`(`first name`, `last name`, `email address`, `code`, `phone number`, `city`, `state`, `zip`, `bloodgroup`, `occupation`, `previous donor`, `chronic ilness`, `allergies`) VALUES ('$fname','$lname','$email','$code','$phoneno','$city','$state','$zip','$bloodgroup','$occupation','$priordonor','$disease','$allergy')";
     $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

     if ($sql == true) {
     	$_SESSION['registered'] = "<div class='success'>Registered Successfully</div>";
		    header('location:damuform.php');
     }else{
     	$_SESSION['registered'] = "<div class='error'>Not registered</div>";
		    header('location:damuform.php');
     }




}else{
	$_SESSION['fill-form'] = "<div class='error'>Kindly fill the form</div>";
    header('location:damuform.php');
}


?>