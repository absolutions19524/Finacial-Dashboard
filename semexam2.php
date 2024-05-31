<?php

 $price = $_POST['price'];
 $summary = $_POST['summary'];


 $conn = new mysqli('localhost', 'root', '', 'semexam');

 if($conn->connect_error){
    die("Error...".$conn->connect_error);
 }
 else{
    $stmt = $conn->prepare("insert into semexam_table3(price, summary)
    values(?, ?)");
    $stmt->bind_param("ss",$price, $summary);
    $stmt->execute();
    echo "Expense Data Uploded successfully..."; 
    $stmt->close();
    $conn->close();
 }


?>