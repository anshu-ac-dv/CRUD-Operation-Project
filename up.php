<?php

        if(isset($_POST['ok']))
        {
            include 'dbcon.php';
            $name = $_POST['name'];
            $number = $_POST['number'];
            
            $sql = "UPDATE ic SET Number='$number' WHERE Name='$name'";
            $r = mysqli_query($conn,$sql);
            if($r==true)
            {
                header('location:fatch.php');
               }

        }

    ?>