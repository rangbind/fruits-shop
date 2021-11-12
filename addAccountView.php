<?php	
	include('header.php');	
?>

<h3> add Account </h3><br>
<div class="row">
	<div class="col-sm-6">
		<form method="post" action="addAccount.php">
			<label> <b>Name:</b></label>
			<input type="textbox" class="form-control" name="name" placeholder="name" required="true"><br>
				
			<label> <b>Phone No:</b></label>		
			<input type="textbox" class="form-control" name="phone_no" placeholder="phone_no" required="true"><br>
			
			<label> <b>Email:</b></label>
			<input type="textbox" class="form-control" name="email" placeholder="email" required="true"><br>

			<label> <b>Address:</b></label>
			<input type="textbox" class="form-control" name="address" placeholder="address" required="true"><br>
			
			<label> <b>Password:</b></label>
			<input type="password" class="form-control" name="password" placeholder="password" required="true"><br>
			
			<label> <b>Confirm Password:</b></label>
			<input type="textbox" class="form-control" name="confirmed_password" placeholder="confirmed_password" required="true"><br>

			<label> <b>Role:</b></label>
			<input type="textbox" class="form-control" name="role" placeholder="Role" required="true"><br>

			
			<button class="btn btn-primary" type="submit" name="submit"> <b> Submit </b> </button>
				
		</form>
	</div>	
</div>