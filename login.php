<?php 
	session_start();
	if (isset($_SESSION['user'])) {
		?>
		<script>
			window.location.href="index.php";
		</script>
		<?php
	}
	// extract($_POST);
		$conn=mysqli_connect("localhost","root","","first_database");
	// if (isset($_POST['submit'])) {
		// extract($_POST);
		$username=$_POST['username'];
		$password=$_POST['password'];

		if (empty($username) || empty($password)) {
			$_SESSION['error']="Please fill the from";
			echo "Please fill the from";
		}else{

			$select=mysqli_query($conn,"SELECT * FROM `signup` WHERE `user_name`='$username'");
			$num=mysqli_num_rows($select);

			if ($num>0) {
				while ($fetch=mysqli_fetch_assoc($select)) {
					
					$pass_verify=password_verify($password,$fetch['password']);

					if ($pass_verify) {
						echo "success";
						$_SESSION['user']=$fetch['user_name'];
						$_SESSION['successfull']="Login seccessfulli Done";
					}else{
						echo "Password not match";
					}
				}
			}else{
				echo "not user have";
			}
		}

	// }


?>