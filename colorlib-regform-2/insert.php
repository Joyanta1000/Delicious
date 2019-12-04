<?php
$con = mysqli_connect('localhost','root','','food');
if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$password = $_POST['password'];

	mysqli_query($con ,"INSERT INTO user (email, birthday, gender,password)
VALUES ('$email', '$birthday', '$gender' ,'$password')");

	header('Location: reg.php?msg= Registration Successfull');

}
?>
