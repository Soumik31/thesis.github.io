<?php 


	header("Access-Control-Allow-Origin: *");
	
	header("Content-Type: application/json; charset=UTF-8");

	include_once "database.php";



    if(isset($_GET['route']) && isset($_GET['acc'])){
        
        $time = new DateTime('now', new DateTimeZone('Asia/Dhaka'));

        $date = $time->format('Y-m-d');

        $hour = $time->format('H');
        $min = $time->format('i');
        $reminder = $min%5;
        $min = $min-$reminder;

        $timeNow = $hour.":".$min.":00";

        $route = $_GET['route'];
        $acc = $_GET['acc'];
        $dayofweek = date('w')+1;

        $sql_insert="insert into daily_data values('','$date','$timeNow','$route','$acc')";

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

    ;


    

    echo json_encode($products_arr);


 ?>