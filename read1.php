<?php
header("Content-Type:application/json;");

function get_data(){
	$con= new PDO("mysql:host=localhost;dbname=file","root","");
	$stmt=$con->prepare("select * from project1");
	$stmt->execute();
	$num = $stmt->rowCount();
   

if($num>0){
  
    
    $products_arr=array();
    $products_arr["records"]=array();
  
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      
        extract($row);
  
        $product_item=array(
            "id" => $id,
            "name" => $name,
            "data" => $data,
           
        );
  
        array_push($products_arr["records"], $product_item);
    }
  
  
    echo json_encode($products_arr);
}
  

	
}
get_data();
?>