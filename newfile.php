<?php

class  Student {

public $name ;
public $emai;
public $CNIC;

function showinfo(){

    echo "Name:" . $this->name ."<br>";

    echo " Email:" . $this->email ."<br>";

    echo " CNIC:" . $this->CNIC ."<br>";

}

}


$student1 =new Student();

$student1 -> name = "Ali";
$student1 -> email = "Ali@gmail.com";
$student1 -> CNIC = 35202098766484947;


$student1 -> showinfo()



?>