<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <?php

        include'dbcon.php';
        $sql = "SELECT * FROM ic";
        $r = mysqli_query($conn,$sql);

    ?>

    <table class="table container shadow mt-5">
    <thead>
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Number</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    
    <?php
        while($row=mysqli_fetch_assoc($r))
        {
        ?>
        <tr>
            <td><?php echo $row['Name'];?></td>
            <td><?php echo $row['Number'];?></td>
            <td>
              <a href="update.php?upd=<?php echo $row['Name']; ?>">Update</a>
              <a href="delete.php?del=<?php echo $row['Name']; ?>">Delete</a>
            </td>
        </tr>

    <?php
        }
        ?>
    </table>
  </body>
</html>