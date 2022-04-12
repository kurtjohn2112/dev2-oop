<?php
#goal: to display property $name inside this file
    #1: connect UI "file" to class "file"
    include 'classes/Fruits.php';
    #2: create an object: what is an object??? an object is a copy of your class. a brige to use the methonds or properties inside the class
        #syntax: $variableName = new ClassName;
    $fruitObj = new Fruits;
    #3 display the property
        #syntax: echo $objName->propertyName

        $fruitname = 'Grapes';
        $fruitcolor  = 'Green';
        $fruitsize = 'Small';

        $fruitObj->set_data($fruitname,$fruitcolor,$fruitsize);

        // $fruitObj->set_data('Banana','Yellow','big');

        
        echo "Fruit Name: ". $fruitObj->get_name();
        echo "<br>";
        echo "Fruit Color: ". $fruitObj->get_color();
        echo "<br>";
        echo "Fruit Size: ". $fruitObj->get_size();




?>