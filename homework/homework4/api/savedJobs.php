<?php
include 'dbConnection.php';
$conn = getDatabaseConnection("c9");

$sql = "SELECT * FROM jobs";

$stmt = $conn->prepare($sql);
$stmt->execute();
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($jobs);
?>