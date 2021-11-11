<?php
	include('header.php');

	$selectquery = "select * from user";
	$result = $mysqli->query($selectquery);

	$dataArray = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$dataArray[] = $row;
	}
?>

<h3>Account List</h3>
<a class="btn btn-primary" href="addAccountView.php">Add New Account</a>
<table class="table table-hover" style="width: 80%">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Phone</th>
			<th>Email</th>
			<th>Address </th>
			<th>Password</th>
			<th>Created At</th>
			<th>Role</th>
			<th>Action</th>


		</tr>

	</thead>
	<tbody>
		
		<?php

		foreach ($dataArray as $key => $value) {

		?>
		<tr>
			<td><?php echo $value['id']; ?></td>
			<td><?php echo $value['names']; ?></td>
			<td><?php echo $value['phone']; ?></td>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $value['address']; ?></td>
			<td><?php echo $value['password']; ?></td>
			<td><?php echo $value['created_at']; ?></td>
			<td><?php echo $value['Action']; ?></td>
			<td><?php echo $value['role']; ?></td>


			<td><a class="btn btn-outline-danger" href="deleteAccount.php?account_id=<?php echo $value['id'];?>" id="account_id">delete </a></td>
			<td><a class="btn btn-primary" href="editAccountview.php?account_id=<?php echo $value['id'];?>" id="account_id"> Edit </a></td> 
			
		</tr>

		<?php	
		}
		?>

		<tr>
			<th> <?php echo "total"; ?> </th>
			<th> <?php echo count($dataArray); ?> </th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th></th>

			
		</tr>
	</tbody>
</table>
