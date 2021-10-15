<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fruit-shop:Login</title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link href="assets/css/loginStyle.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!------ Include the above in your HEAD tag ---------->
	</head>
	<body>

		<div class="wrapper fadeInDown">
		  <div id="formContent">
		  	<div class="fadeIn first">
		      <h4>Login</h4>
		    </div>
		    <!-- Login Form -->
		    <form  method="post" action="loginCheck.php">
		      <input type="text" id="login" class="fadeIn second" name="username" placeholder="username" required="true">
		      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password" required="true">
		      <input type="submit" class="fadeIn fourth" value="Log In">
		    </form>

		  </div>
		</div>
	</body>
</html>