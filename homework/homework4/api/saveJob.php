<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");

$job = $_POST['job']; //prev productKeyword

$sql = "INSERT INTO jobs (jobName) VALUES (:job)";
$arr = array();
$arr[":job"] = $job;

$stmt = $conn->prepare($sql);
$stmt->execute($arr);
?>