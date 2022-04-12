<?php 

class Age{
    private $firstname;
    private $lastname;
    private $birthyear;
    private $currentyear;

    #setter
    public function set_values($fname,$lname,$cyear,$byear){

        $this->firstname = $fname;
        $this->lastname = $lname;
        $this->birthyear = $byear;
        $this->currentyear = $cyear;
    }

    #getter
    public function get_name(){
        return $this->firstname;
    }
    public function get_lastname(){
        return $this->lastname;
    }
    public function calculate_age(){
        // return $this->currentyear - $this->birthyear;
        $age = $this->currentyear - $this->birthyear;

        return $age;
    }


}




?>