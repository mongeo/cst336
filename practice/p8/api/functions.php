<?php
//session_start();
//checks whether user has logged in


    include '../dbConnection.php';
    $conn = getDatabaseConnection("c9");

    $sql = "UPDATE poll_response SET :option = :option + 1";
    $arr = array();
    $arr[":option"] = $_GET["option"];
    
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);

?>