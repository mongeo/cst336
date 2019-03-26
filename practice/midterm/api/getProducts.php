<?php
    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("midtermPractice");
    $sql = "SELECT * FROM mp_product ORDER BY productName";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
?>