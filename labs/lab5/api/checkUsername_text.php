<?php
header('Access-Control-Allow-Origin: *');

//******
//This Web API returns whether a username is included in an Array
//It uses plain text to output the data
//******

//echo $_GET['username'];

$usernames = array("eeny", "meeny");
$usernaames[] = "miny";  //adding a new element at the end of the array
array_push($usernames, "maria", "john");

//print_r($usernames)

$curUsername = $_GET['username'];
//Checking whether a username is included within the "$usernames" array
if ( strlen($curUsername) < 4 ) {
    echo "<span class='fail'>" . "Must be at least 4 characters!"  . "</span>";
}

elseif ( in_array(strtolower($curUsername), $usernames) ) {
    echo "<span class='fail'>" . "Not Available!"  . "</span>";
    
}
else{
    echo "<span class='success'>" . "Available!" . "</span>";
}
?>