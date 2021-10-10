<?php

function redirect_to ($location){
	header ("location": . $location);
	exit;
}
  
  $logged_in=$_GET["logged_in"];
  if($logged_in=="1"){
  	redirect_to("fruits-shop");
  }else{
  	redirect_to("http://google.com");
  }

?>