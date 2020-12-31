<?php
	session_start();

	if(isset($_POST["username"])){

		$username =$_POST['username'];
		$password = $_POST['password'];

		if($username==""){
			$_SESSION["pesan"] = "Username harus diisi!";
			header("location:login.html");
			exit();
		}else if ($password==""){
			$_SESSION["pesan"] = "Password harus diisi!";
			header("location:login.html");
			exit();
		} else {

			include("koneksi.php");

			$result = $connect->query("SELECT * FROM customer WHERE username LIKE '".$username."'");
		

			if($result->num_rows == 0){

				$connect->query("INSERT INTO login VALUES ('".$username."','".$password."')");
				header("location:index.html");
				exit();

			} else{
				$_SESSION["pesan"] = "Cek Password Atau Username Anda!";
			header("location:login.html");
			exit();
			}
		}
	} else{
		header("location:index.html");
		exit();
	}
?>