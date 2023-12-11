<?php

include '../connection.php';

$userEmail = $_POST['username'];

$sqlQuery = "SELECT * FROM mobile WHERE email = '$userEmail'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows> 0)
{
    echo json_encode(array("emailFound"=>true));
}
else
{
    echo json_encode(array("emailFound"=>false));
}