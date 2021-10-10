<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Login form and open a new page </title>
</head>
<body>
	<h1> Login form </h1>
	<form name="myForm" method="POST" action="homepage.php">
		<label> Username </label>
		<input  class="text" type="text" name="username" placeholder="Username"><br><br>
		<label> Password </label>
		<input class="text" type="Password" name="Password" placeholder="Password"><br><br>
		<button class="login-btn" type="submit" name="submit"> Submit </button>

	</form>
</body>
</html>