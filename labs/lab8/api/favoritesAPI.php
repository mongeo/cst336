<?php
include '../../../inc/dbConnection.php';
$conn = getDatabaseConnection("c9");

$action = $_GET['action'];
$keyword = $_GET['q'];
$imageURL = $_GET['url'];

$arr = array();
$arr[":imageURL"] = $imageURL;
$arr[":keyword"] = $keyword;

//receives action, url, keyword 
switch($action) {
    case "add":
        $sql = "INSERT INTO lab8_pixabay (imageURL , keyword) VALUES (:imageURL , :keyword)";
        break;
    case "delete":
        $sql = "DELETE FROM lab8_pixabay WHERE imageURL = :imageURL";
        break;
}

$stmt = $conn->prepare($sql);
$stmt->execute($arr);

echo $imageURL . " " . $keyword;

// DELETE FROM `lab8_pixabay` WHERE `lab8_pixabay`.`id` = 3"
?>

