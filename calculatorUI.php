<?php 
include 'classes/Calculator.php';
$obj = new Calculator;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        first digit: <br>
        <input type="number" name="num1" id=""> <br>
        second digit: <br>
        <input type="number" name="num2" id=""> <br>

        <input type="radio" name="operator" value="add" id=""> Addition
        <input type="radio" name="operator" value="sub" id=""> Subtraction
        <input type="radio" name="operator" value="mult" id=""> Multiplication
        <input type="radio" name="operator" value="div" id=""> Division
        <br>
        <button type="submit" name="submit">Submit</button>

        <?php 
            if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];

                $obj->set_values($num1,$num2,$operator);

                echo "Result: ". $obj->calculate();

               
            }
        
        ?>
    </form>
</body>
</html>