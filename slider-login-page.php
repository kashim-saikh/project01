<?php 
		session_start();
	if (isset($_SESSION['user'])) {
		?>
		<script>
			window.location.href="index.php";
		</script>
		<?php
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Slider Login Page</title>
	<link rel="stylesheet" href="css/main.css">
	<!-- jQuery Cdn -->
	<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="main">
		<input type="checkbox" id="chk" aria-hidden="true">
		<div class="singup">
			<form id="form">
				<label for="chk" aria-hidden="true">Sing Up</label>
				<input type="text" name="username" id="username" placeholder="UserName">
				<input type="Email" name="email" id="email" placeholder="Email">
				<input type="password" name="password" id="password" placeholder="password">
				<input type="password" name="cpassword" id="cpassword" placeholder="Canfrom password">
				<button type="button" id="SingUp">Sing Up</button>
			</form>
		</div>
		<div class="login">
			<form>
				<label for="chk" aria-hidden="true">Login</label>
				<input type="text" name="username" class="name" placeholder="UserName">
				<h5 id="user_id_display"></h5>
				<input type="password" class="pass" name="password" placeholder="password">
	            <button type="button" name="submit" id="login">Login</button>
	        </form>
		</div>
	</div>						
</body>
<script>
	$(document).ready(function(){
		$('#login').click(function(){

	          var username = $('.name').val();
	          var password = $('.pass').val();
        	
			$.ajax({
				url:'login.php',
				type:'POST',
				data:{username:username , password:password},
				success:function(data,response){
					// alert(data);
					if (response === "success") {
	                    // Redirect to a dashboard or home page upon successful login
	                    window.location.href = "index.php"; // Replace with your destination URL
	                } else {
	                    $("#response").html("Invalid credentials. Please try again.");
	                }

				}
			});
		
		});



		$('#SingUp').click(function(){

			var username = $('#username').val();
			var email = $('#email').val();
			var password = $('#password').val();
			var cpassword = $('#cpassword').val();

			$.ajax({
				url:'registration.php',
				type:'POST',
				data:{ username:username , email:email , password:password , cpassword:cpassword },
				success:function(data){
					alert(data);
				}
			});
		
		});
	});
</script>
</html>