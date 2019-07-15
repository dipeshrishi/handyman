<?php

session_start();
include "db.php";
$fname=$_POST['first_name'];
$lname=$_POST['last_name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$add=$_POST['address'];
$pass=$_POST['password'];



{
	$sql="INSERT into user(first_name,last_name,e_mail,contact,address,pass) VALUES ('$fname','$lname','$email','$phone','$add','$pass')";
	if (mysqli_query($con, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
	//$_SESSION["name"]=$email;


	//header("Location:http://localhost/044/scanup/index.html ");
}

?>
