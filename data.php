<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true"> 
		<title>Data</title>
		<link rel="icon" href="images/logo.png">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/dojo/1.13.0/dojo/dojo.js"></script>
		<script>
			$('document').ready(function(){
				$(".btn").click(function(){
					$(".input").toggleClass("active").focus().val("");
					$(this).toggleClass("animate");
					$(".input").val("");
				});
			});
		</script>

	</head>

	<body>
	
		<h>     <!-- header with full bold, h1 to h6 for decreasing bold format. italic "<i></<i>", underline "<u></u>" with headers -->
			<center class="title_bg"><img src="images/logo.png" ></img>Traffic Prediction Using Kalman Filter</center>
		</h>

				
		<div class="nav_bar">
			<ul>				
				<li> <a href="index.html"><img src="images/home.png" width="18"/></img> Home </a></li>
				<li> <a href="about.html"> About </a></li>
				<li> <a href="photos.html"> Photos </a></li>
				<li> <a href="hardware.html"> Hardware </a></li>
				<li> <a href="kalman.html"> Kalman ft </a></li>
				<li> <a href="data.php" id="onlink"> Data </a></li>
				<li> <a href="app.html"> APP </a></li>
				<li> <a href="contact.html"> Contact </a></li>
			</ul>
		</div>
		<!--
		<div class="wrapper">
			<div class="search-box">
				<input type="text" placeholder="Search" class="input">
				<div class="btn">
					<i class="fa fa-search" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		-->
		<div class="main_container1">
			<p> 
				<h1>
					Data Table
				</h1>
				
				<?php
					include "config.php"; 

					$url = 'https://www.kalmanft.com/api/getData.php';
			
	         
					$contents = file_get_contents($url); 

					$results = json_decode($contents,true); 
					$final =array_values($results);
 
				?>
 

				<table width="31.5%" class="tab">
					 <tr>
						 <th> id </th> 
						 <th> Route </th>
						 <th> Date </th>
						 <th> Time </th>
						 <th> ACC </th>
					 </tr> 
					<?php foreach ($final as $key => $value) {
						# code... 
						 ?>
							<tr>
								<td><?php echo $value['id']; ?></td>
								<td><?php echo $value['Route']; ?></td>	
								<td><?php echo $value['Day']; ?></td>	
								<td><?php echo $value['Time']; ?></td>
								<td><?php echo $value['ACC']; ?></td>	
					<?php } ?> 
				</table>
				
				<table width="17%" class="tab">
					 <tr>
						 <th> Route </th> 
						 <th> Road </th>
					</tr>
					
			    	<tr>
						 <td> 1 </td> 
						 <td> Square Building to TB gate </td>
					</tr>
					
				<?php
					include "config.php"; 

					$url = 'https://www.kalmanft.com/api/getdata2.php';
			
	         
					$contents = file_get_contents($url); 

					$results = json_decode($contents,true); 
					$final =array_values($results);
 
				?>
				
				<table width="47.5%" class="tab">
					 <tr>
						 <th> id </th> 
						 <th> Route </th>
						 <th> Day </th>
						 <th> Time </th>
						 <th> KPCC </th>
				<!--	 <th> Trafficflow </th> -->
						 <th> Density </th>
				<!--	 <th> Avgspacing </th>
						 <th> Headway </th>
						 <th> Error </th>
						 <th> Errorper </th> -->
					 </tr> 
					<?php foreach ($final as $key => $value) {
						# code... 
						 ?>
							<tr>
								<td><?php echo $value['id']; ?></td>
								<td><?php echo $value['Route']; ?></td>	
								<td><?php echo $value['Day']; ?></td>	
								<td><?php echo $value['Time']; ?></td>
								<td><?php echo $value['KPCC']; ?></td>	
				<!--			<td><?php echo $value['Trafficflow']; ?></td> -->
								<td><?php echo $value['Density']; ?></td>	
				<!--			<td><?php echo $value['Avgspacing']; ?></td>	
								<td><?php echo $value['Headway']; ?></td>
								<td><?php echo $value['Error']; ?></td>	
								<td><?php echo $value['Errorper']; ?></td>	-->
					<?php } ?> 
			</p>
		</div>
		<div class="container"> 	
			<div class="footer_area container"> 	
				<div class="copyright"> 
					<p> copyright www.kalmanft.com | All Right Reserved </p>
				</div>	
				<div class="designer"> 
					<p> Designed By Soumik </p>
				</div>	
			</div>
		</div>
		
	</body>

</html>