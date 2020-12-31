
<?php
	include "koneksi.php";

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$confirm = $_POST['confirm'];

	$sql = "INSERT INTO customer(firstname, lastname, username, password, email)
			VALUES ('$firstname', '$lastname', '$username', '$password', '$email')";

	$result=mysqli_query($connect, $sql);
	
	if ($result) {
    header('location:index.html');
    exit;
	} else {
    header('location:register.html');
    exit;
	}
	mysqli_close($connect);
?>

