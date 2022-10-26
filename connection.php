<?php
$servername ="localhost";
$username ="root";
$passsword ="";
$db_name ="posts";
$conn = new mysqli($servername,$username,$passsword,$db_name);
if($conn->connect_error){
    die("connection faiiled" . $conn->connect_error);
}
?>