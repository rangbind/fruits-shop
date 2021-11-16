<?php
	include('config/connection.php');
	session_start();
	//check if user is logged in or not
	if(empty($_SESSION['user_id'])){
		header("Location:index.php");
	}
	//if user not logged in redirect to login page | index.php
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home:Fruits-Shop</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container">
	    <nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    <a class="navbar-brand">Fruit Shop</a>
		    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		      <li class="nav-item active">
		        <a class="nav-link" href="dashboard.php">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="addFruitsView.php">Add Fruit</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href= "accountList.php">Accounts</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="addAccountView.php">Add Account</a>
		      </li>
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php">Logout</a>
		    </form>
		  </div>
		</nav>
<br>