<?php
// error_reporting(0);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "register";


$con = mysqli_connect($servername,$username,$password,$dbname);


if ($con) {    
    //  echo "conection made";
}
else {
    echo "connection failed";
}


?>

