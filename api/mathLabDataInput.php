<?php 


	header("Access-Control-Allow-Origin: *");
	
	header("Content-Type: application/json; charset=UTF-8");

	include_once "database.php";



    if(isset($_GET['Route']) && isset($_GET['Kpcc']) && isset($_GET['Trafficflow']) && isset($_GET['Density'])&& isset($_GET['Avgspacing'])&& isset($_GET['Headway'])&& isset($_GET['Error']) && isset($_GET['Errorper'])){
        
        $time = new DateTime('now', new DateTimeZone('Asia/Dhaka'));

        $date = $time->format('Y-m-d');

        $hour = $time->format('H');
        $min = $time->format('i');
        $reminder = $min%5;
        $min = $min-$reminder;

        $timeNow = $hour.":".$min.":00";

        $Route = $_GET['Route'];
        $Kpcc = $_GET['Kpcc'];
        $Trafficflow = $_GET['Trafficflow'];
        $Density = $_GET['Density'];
        $Avgspacing = $_GET['Avgspacing'];
        $Headway = $_GET['Headway'];
        $Error = $_GET['Error'];
        $Errorper = $_GET['Errorper']; 

        $dayofweek = date('w')+1;

        $sql_insert="insert into kalman_data values('','$date','$timeNow','$Route','$Kpcc','$Trafficflow','$Density','$Avgspacing','$Headway','$Error','$Errorper')";

        $sql_result=$conn->query($sql_insert);

        if($sql_result){
            $products_arr['result']="Data Inserted";    
        }
        else{
            $products_arr['result']="Data is not inserted";
        }

    }
    else{
        $products_arr['result']="Not getting proper Value";   
    }
 

    

    echo json_encode($products_arr);


 ?>