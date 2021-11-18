<?php

	if(isset($_FILES['myimage'])){
		echo "<pre>";
		print_r($_FILES);
		echo "</pre>";
	}

	$file_tmp =$_FILES['myimage']['tmp_name'];
    $fileName =$_FILES['myimage']['name'];
    move_uploaded_file($file_tmp,"uploads/".$file_name);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>file upload form</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="text" name="emailId" required="true"><br><br>
		<input type="file" name="myimage" required="true"><br><br>
		<button type="submit" name="submit">Submit</button>
	</form>
</body>
</html>