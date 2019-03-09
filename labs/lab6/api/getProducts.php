<?php
// Set connection variables
$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password = "";

// Establish a connection
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// Set Errorhandling
$dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 


////SELECT - Code Snippet
$sql = "SELECT * FROM om_product ORDER BY productPrice LIMIT 18";
$stmt = $dbConn -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records);
echo json_encode($records);
//echo $records[0]['productName'];

?>