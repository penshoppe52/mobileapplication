<?php
include '../connection.php'

$userName = $_POST['username'];
$userEmail = $_POST['email'];
$userPassword = md5($_POST['username']);

$sqlQuery = "INSERT INTO mobile SET username = '$userName', email = '$userEmail', password = '$userPassword'";

query($sqlQuery)

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery)
{
    echo json_encode(array("success"=>true));
}
else 
{
    echo json_encode(array("success"=>false));
}