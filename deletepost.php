<?php
include "connection.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE from blogs where id =$id";
    $conn->query($sql);
}
header('location:/test/indexpost.php');
exit;
?>