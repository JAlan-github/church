<?php
	require_once("./services/facebook_services.php");
	
	$response = facebook_services::getEvents(3, "full");
	
	// Output final response
	echo $response;
?>