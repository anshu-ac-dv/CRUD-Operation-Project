<?php

    include('dbcon.php');
    $a = $_GET['del'];
    $sql = "DELETE FROM ic WHERE name='$a'";
    $r = mysqli_query($conn,$sql);
    if ($r==true) {
        header('location:fatch.php');
    }

?>