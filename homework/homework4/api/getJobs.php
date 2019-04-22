<?php
$keyword = $_GET['job'];
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "http://api.dataatwork.org/v1/jobs/autocomplete?begins_with=$keyword",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"),
));
$jsonData = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
echo json_encode($jsonData);
?>