<?php
include '../inc/dbConnection.php';
$conn = getDatabaseConnection("finalProject");

$id = $_GET['id'];


$sql = "SELECT * FROM items";
$arr[":id"] = id;
$arr = array();

$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>