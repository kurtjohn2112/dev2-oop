<?php 
include 'classes/Age.php';
$ageObj = new Age;


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
        Enter Firstname: <br>
        <input type="text" name="firstname" id=""><br>
        Enter Lastname: <br>
        <input type="text" name="lastname" id=""><br>
        Enter Birthyear: <br>
        <input type="number" name="birthyear" id=""><br>
        Enter Current Year: <br>
        <input type="text" name="currentyear" id=""><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php 
        if(isset($_POST['submit'])){
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $byear = $_POST['birthyear'];
            $cyear = $_POST['currentyear'];

            $ageObj->set_values($fname,$lname,$cyear,$byear);

            echo "Firstname: ". $ageObj->get_name();
            echo "<br>";
            echo "Lastname: ". $ageObj->get_lastname();
            echo "<br>";
            echo "Age: ". $ageObj->calculate_age();
        }
    
    
    ?>
</body>
</html>