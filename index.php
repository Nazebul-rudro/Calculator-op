<?php
include("./vendor/autoload.php");
use rudhro\Calculator\Calculator;

@$num1 = $_POST['num1'];
@$num2 = $_POST['num2'];
@$op = $_POST['op'];

$cal = new Calculator($num1, $num2);
if(isset($_POST['sub'])){
}
if($op == "+"){
$result = $cal->autosum();
}elseif($op == "-"){
  $result = $cal->sub();
}elseif($op == "*"){
  $result = $cal->mal();
}elseif($op == "/"){
  $result = $cal->div();
}






?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Calculator</title>
  </head>
  <body>

  
<section class="col-md-4 offset-md-4 mt-5">
    
    <div class="card">
    <div class="card-body">
    <form action="" method="post">
    <h2 class="pt-4">Calculator</h2>
    <hr>
        <div class="mt-4">
            <label for="num1" class="form-label">Number 1</label>
            <input type="number" name="num1" id="num1" class="form-control">
        </div>
        <div class="my-4">
        <label for="op" class="form-label">Operator</label>
            <select name="op" id="" class="form-control" id="op">
                <option selected>Open this select menu</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <div class="my-3">
            <label for="num2" class="form-label">Number 2</label>
            <input type="number" name="num2" id="num2" class="form-control">
        </div>
        <div class="d-flex justify-content-center">
            <input type="submit" value="Calculate" class="btn btn-success">
        </div>
    </form>
    <div class="d-flex mt-2">
        <p class="text-danger ">Result : <?php echo $result ?? "";?> </p>
    </div>
    </div>
    </div>
  </section>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>