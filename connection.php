<?php

$username = "root";
$password = "Husenahmad";
$server = "localhost";
$db = "crudoperation";
// $database = "crudoperation";

$con = mysqli_connect($server, $username, $password, $db);

// $db = mysqli_select_db($con,$database);

if($con)
{
    // echo "Connection Successfully !...";
    ?>
        <script>
            alert('Connection Successful...');
        </script>
    <?php
}
else
{
    echo "Not Connection";
    // die("Not Connection" . mysqli_connect_error());
}

?>