<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from catig where id =$id";
    $conn->query($sql);
}
header('location:/test/indexcatg.php');
exit;
?>