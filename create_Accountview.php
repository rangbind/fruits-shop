<?php
	
?>

<h3> Login Here </h3><br>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="server.php">
			<label> <b>Name:</b></label>
			<input type="textbox" class="form-control" name="name" placeholder="name" required="true"><br><br>	
				
			<label> <b>Phone No:</b></label>		
			<input type="textbox" class="form-control" name="phone_no" placeholder="phone_no" required="true"><br><br>
			
			<label> <b>Email:</b></label>
			<input type="textbox" class="form-control" name="email" placeholder="email" required="true"><br><br>

			<label> <b>Address:</b></label>
			<input type="textbox" class="form-control" name="address" placeholder="address" required="true"><br><br>
			
			<label> <b>Password:</b></label>
			<input type="textbox" class="form-control" name="password" placeholder="password" required="true"><br><br>
			
			<label> <b>Confirm Password:</b></label>
			<input type="textbox" class="form-control" name="confirmed_password" placeholder="confirmed_password" required="true"><br>
			
			<br>
			<button class="btn btn-primary" type="submit" name="submit"> <b><h2> Submit </h2></b> </button>
			
		</form>
	</div>	
</div>