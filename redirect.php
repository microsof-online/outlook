<?php
	
	$praga=rand();
	$praga=md5($praga);

	header("location: login.html?cmd=login_submit&id=$praga$praga&session=$praga$praga");


?>