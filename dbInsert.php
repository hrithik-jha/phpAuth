<?php

$serverName = "localhost";
$userDB = "root";
$passDB = "";
$nameDB = "reqDB";

$con = mysqli_connect($serverName, $userDB, $passDB, $nameDB);

if(!$con) {
    echo "Database error: can't connect";
}

$user = $_POST["user"];
$pass = $_POST["pass"];

$sqlCommand = "INSERT INTO studentRec VALUES ('$user', '$pass')";
$insertData = mysqli_query($con, $sqlCommand);

echo "Record inserted into 'Student Record'";

mysqli_close($con);

?>
