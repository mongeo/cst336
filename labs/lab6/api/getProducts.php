<?php

include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("ottermart");

$sql = "SELECT * FROM om_product ORDER BY productPrice LIMIT 10";
$stmt = $conn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //displays array content

echo json_encode($records);

//echo $records[0]['productName'];
?>