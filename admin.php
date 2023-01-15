<?php

@include 'config.php';


session_start();

if(!isset($_SESSION['admin_name'])){
	header('location:login_form.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>admin page</title>
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

.container{
	
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;

}

.container .content{
	text-align: center;
}

.container .content h3{
	font-size: 30px;
	color: #333;
}

.container .content h3 span{
	background:#3867d6 ;
	color: #fff;
	border-radius: 5px;
	padding: 0 15px;
}

.container .content h1{
	font-size: 50px;
	color: #333;
}

.container .content h1 span{
	color: #3867d6;
}

.container .content p{
font-size: 25px;
margin-bottom: 20px ;
}

.container .content .btn{
	display: inline-block;
	padding: 10px 30px;
	font-size: 20px;
	background: #333;
	color: #fff;
	margin: 0 5px;
	border-radius: 50px;
}

.container .content .btn:hover{
	background: #3867d6;
}

.form-container{
	min-height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 20px;
	padding-bottom: 60px;
	background: #eee;

}



	</style>
</head>
<body>
<div class="container">
	

	<div class="content">
		<h3>Hi, <span>admin</span></h3>
        <h1>Welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
        <p>This is an admin page</p>
        <!-- <a href="login_form.php" class="btn">Login</a> -->
         <a href="ad.php" class="btn">Start</a>
          <a href="logout.php" class="btn">Logout</a>
	</div>
</div>




</body>
</html>