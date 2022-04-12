<?php 


class Calculator{
    private $num1;
    private $num2;
    private $operator; // add

    #setter
    public function set_values($num1,$num2,$operator){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operator = $operator;


    }
    #logic/getter


    public function calculate(){
        if($this->operator == 'add'){
            return $this->num1 + $this->num2;
        }elseif($this->operator == 'sub'){
            return $this->num1 - $this->num2;
        }elseif($this->operator == 'mult'){
            return $this->num1 * $this->num2;
        }else{
            return $this->num1 / $this->num2;
        }
    }




}


?>