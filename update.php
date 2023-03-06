<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <?php

        include('dbcon.php');
        $a = $_GET['upd'];
        $sql = "SELECT * FROM ic WHERE name='$a'";
        $r=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($r);

    ?>

    <div class="container">
        <form class="row g-3 mt-5 p-5 shadow" id="form" action="up.php" method="post">
            <div class="col-md-6">
                <label>Name</label>
                <input type="text" class="form-control" value="<?php echo $row['Name']; ?>" id="username" name="name">
            </div>
            <div class="col-md-6">
                <label>Phone Number</label>
                <input type="number" class="form-control" value="<?php echo $row['Number']; ?>" id="email" name="number">
            </div>
            <div class="col-12">
                <button type="submit" id="submit" class="btn btn-primary" name="ok">Submit</button>
            </div>
        </form>
    </div>

  </body>
</html>