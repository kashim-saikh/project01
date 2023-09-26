<?php
			session_start();


	$conn=mysqli_connect("localhost","root","","first_database");

	extract($_POST);
	// $currentTime=time();

	$select=mysqli_query($conn,"SELECT * FROM `signup` WHERE `email`='$email' || `user_name`='$username'");

	$num=mysqli_num_rows($select);
	if ($num>0) {
		echo "data alredy exits";
	}else{

		$pass_hash=password_hash($password, PASSWORD_DEFAULT);
		$cpass_hash=password_hash($cpassword, PASSWORD_DEFAULT);

		if ($pass_hash && $cpass_hash) {

			$insert=mysqli_query($conn," INSERT INTO `signup`(`user_name`, `email`, `password`, `c_password`) VALUES ('$username','$email','$pass_hash','$cpass_hash')");

			if ($insert){
			echo "data inserted seccessfully";
			}else{
				echo "sorry";
			}
		}
	}

?>