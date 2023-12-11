<?php
include '../connection.php'

$userEmail = $_POST['email'];
$userPassword = md5($_POST['username']);

$sqlQuery = "SELECT * FROM mobile WHERE username = '$userName' AND password = '$userPassword'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery -> num_rows > 0)
{
    $userRecord - array();
    while($rowFound = $resultOfQuery -> fetch_assoc())
    (
        $userRecord[] = $rowFound;
    )

    echo json_encode(
        array(
            "success" => true,
            "userData" => $userRecord[0],
        )
        );
}
else
{
    echo json_encode(array("success" => false));
}