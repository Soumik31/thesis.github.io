<?php 

	
	$url = 'http://localhost:8082/webkalman/api/getData.php';
			
	         
	$contents = file_get_contents($url); 

	$results = json_decode($contents,true); 
	$final =array_values($results);

	var_dump($final);
	echo "<br>";

	 



 ?>