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

    $sum = 0;
    $a = 0;
    $b = 0;

    if(isset($_POST['ok'])){
        $a = $_POST['num1'];
        $a = $_POST['num2'];
        $sum = $a + $b;
        
    }

    ?>
    
    <div class="container">
        <form class="row g-3 mt-5 p-5 shadow" method="post">
            <div class="col-md-6">
                <label>First Number</label>
                <input type="number" class="form-control" name="num1">
            </div>
            <div class="col-md-6">
                <label>Second Number</label>
                <input type="number" class="form-control" name="num2">
            </div>
            <div class="col-12">
                <button type="submit" id="submit" class="btn btn-primary" name="ok">Add</button>
            </div>
            <h1><?php echo $sum; ?></h1>
        </form>
    </div>

  </body>
</html>