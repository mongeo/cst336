<?php

    include '../../../inc/dbConnection.php';
    $conn = getDatabaseConnection("ottermart");

    $sql = "DELETE FROM `om_product` WHERE `om_product`.`productId` = " . $_GET['productId'];
    $stmt = $conn->prepare($sql);
    $stmt->execute();







?>