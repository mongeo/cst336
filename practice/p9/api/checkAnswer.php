<?php

    include 'dbConnection.php';
    $conn = getDatabaseConnection("c9");
    
    $arr = array();
    $arr[':email'] = $_GET['email'];
    
    $sql = "SELECT count(*) FROM quiz WHERE email = :email";
    
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($records);
    



//receive email and score from the quiz

//1. Get latest score based on email



//2. If record found, first display it in JSON format, then update record
//3. If record not found, insert a new record for that email


?>