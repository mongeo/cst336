<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("parkAnimals");

$commonName = $_GET['commonName'];

$sql = "SELECT *
        FROM species
        NATURAL JOIN parks
        WHERE commonName = :commonName";

$np = array();
$np[':commonName'] = $commonName;

$stmt = $conn -> prepare($sql);
$stmt->execute($np);
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($records);
?>