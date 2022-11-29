<?php 


	header("Access-Control-Allow-Origin: *");
	
	header("Content-Type: application/json; charset=UTF-8");

	include_once "database.php";


    $sql="select * from kalman_data";

    $sql_result=$conn->query($sql);

    while($row=mysqli_fetch_assoc($sql_result)){
    	$output[]=$row;
    }

    $products_arr=array();
    $products_arr["records"]=array();


     $product_item=array(
        "id" => '1',
        "name" => 'Sauvik'
    );
 

    array_push($products_arr["records"], $product_item);

    echo json_encode($output);


 ?>