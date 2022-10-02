<?php

include 'connection.php';

$id = $_GET['ids'];

$deletequery = " delete from crud where id=$id ";

$query = mysqli_query($con, $deletequery);

if ($query) {
    echo '<script> alert("Data is Deleted")</script>';
    header("location:display.php");
} else {
    echo '<script> alert("Data is not Deleted")</script>';
}



?>