<?php

include '../../../inc/dbConnection.php';

$conn = getDatabaseConnection("parkAnimals");

$animal = $_GET['animal']; //prev productKeyword

$namedParameters = array();

//This query works BUT it allows SQL INJECTION (because it's using single quotes)
//$sql = "SELECT * FROM `om_product` WHERE productName LIKE '%$product%'";

$sql = "SELECT distinct commonName FROM species WHERE 1"; //Retrieves ALL records

if (!empty($animal)) { //user entered a product keyword
    $sql .=  " AND commonName LIKE :animal";
    $namedParameters[":animal"] = "%$animal%";
    $sql .=  " ORDER BY commonName LIMIT 250";
}


$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute($namedParameters);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //debugging    

echo json_encode($records);

?>