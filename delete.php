<?php
include "connection.php";
$id=$_GET['id'];
$result=mysqli_query($mysqli,"Delete from products where id=$id");
header("Location:view.php");
?>

