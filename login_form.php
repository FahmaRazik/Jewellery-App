<?php

// @include 'config.php';
$conn = mysqli_connect('localhost','root','','user_db');

session_start();

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$user_type = $_POST['user_type'];

$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

	$row = mysqli_fetch_array($result);

	if($row['user_type'] == 'admin'){

		$_SESSION['admin_name'] = $row['name'];
		header('location:admin2/dashboard.php');

	}elseif($row['user_type'] == 'user'){

		$_SESSION['admin_name'] = $row['name'];
		header('location:logged_userpage.php');
	}



	}else{
		$error[] = 'Incorrect email or password!';
	}

};

?>






















<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="add.css"> -->
	<!-- <link rel="stylesheet" href="ad1.css"> -->
	<title>Login form</title>
	<style type="text/css">
		
		*{
	font-family: 'poppins',sans-serif;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	outline: none;
	border: none;
	text-decoration: none;
	
}



.form-container{
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;
	background: #464646;

}
.form-container form{
	padding: 20px;
	border-radius: 5px;
	box-sizing: 0 5px 10px rgba(0,0,0,.1);
	background: #FFF;
	text-align: center;
	width: 500px;
}

.form-container form h3{
	font-size: 30px;
	text-transform: uppercase;
	margin-bottom: 10px;
	color: #333;
}

.form-container form input,
.form-container form select{
	width: 100%;
	padding: 10px 15px;
	font-size: 17px;
	margin:8px 0;
	background: #eee;
	border-radius: 5px;
}


.form-container form select option{
background: #fff;
}

.form-container form .form-btn{
	background: #ADD8E6;
	color:#3867d6;
	text-transform: capitalize;
	font-size: 20px;
	cursor: pointer;
}

.form-container form .form-btn:hover{
	background: #3867d6;
	color: #fff;
}

.form-container form p{
	margin-top: 10px ;
	font-size: 20px;
	color: #333;
}

.form-container form p a{
color: #3867d6;}

.form-container form .error-msg{
	margin: 10px 0;
	display: block;
	background: #3867d6;
	color: #fff;
	border-radius: 5px;
	font-size: 20px;
	padding: 10px;
}








	</style>



</head>



<body> 
<div class="form-container">
	<form action="" method="post">
		<h3>Login Now</h3>
		<?php

		if(isset($error)){
			foreach ($error as $error) {
				echo '<span class="error-msg">'.$error.'</span>';
			};
		};

         ?>
		<input type="email" name="email" required placeholder="Enter Your Email">
		<input type="password" name="password" required placeholder="Enter Your Password">
		
		<input type="submit" name="submit" value="Login Now" class="form-btn"></input>
		<p>Don't have an account? <a href="register_form.php">Register Now</a></p>
	</form>

</div>
</body>
</html>