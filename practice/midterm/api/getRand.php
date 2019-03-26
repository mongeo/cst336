<?php
    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("midtermPractice");
    $sql = "SELECT COUNT(*) FROM mp_product";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($records);
?>