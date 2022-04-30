<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medinaaa web</title>
    <!--menghubungkan ke css-->
    <link rel="stylesheet" href="style.css">
    <!--Bootstrap online-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-transparant">
    <a class="navbar-brand" href="#">Medinaaa</a>
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">About</a>
        <a class="nav-link" href="#">contact</a>
      </div>
    </div>
    <div class="row">
    <div class="col-4 text-center">
    <form action="hitung-rad.php" method="get">
        <h2><b>Radius</b></h2> <br>
        <label>Input Radius</label><br>
            <input  class="form1"  type="number" name="r"> <br> <br>
            <button class="btn-start" type="submit">Calculate</button>
        </form>
    </div> 
    <div class="col-4 text-center">
        <img src="hi.png" width="350">
    </div>
    
    <div class="col-4 text-center">
        <form action="hitung-d.php" method="get">
        <h2><b>Diameter</b></h2> <br>
            <label>Input Diameter</label><br>
            <input class="form1" type="number" name="d"> <br> <br>
            <button class="btn-start" type="submit">Calculate</button>
            <?php
        $phi = 3.14;
        $d = $_GET['d'];

        $circle1 = ($phi * $d * $d)/4;
        ?>
        <h3><?php echo $circle1 ?></h3>
        </div>
        </form>
    </div>
    
</body>
</html>