<?php 

	$route="1";
	$acc="188";

	$url = 'https://www.kalmanft.com/api/sendDataToDatabase.php?route='.$route.'&acc='.$acc;

			
	         
	$contents = file_get_contents($url); 

	$results = json_decode($contents,true);  

	var_dump($results);
	echo "<br>";

	 



 ?>