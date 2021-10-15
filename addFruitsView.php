<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home:Fruits-Shop</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>
	<h3>Add</h3>
	<form method="post" action="addFruits.php">
		<center>
			<label>Fruit Name:</label>
			<input type="text" class="textbox" name="fruit_name" placeholder="Fruit Name" required="true">
			<br><br>
			
			<label>Price:</label>
			<input type="text" class="textbox" name="Price" placeholder="Price" required="true">
			<br><br>

			<label>Quantity:</label>		
			<input type="text" class="textbox" name="Quantity" placeholder="Quantity" required="true">
			<br><br>
			<button class="submit-btn" type="submit" name="submit">Submit</button>
		</center>
	</form>
</body>
</html>
