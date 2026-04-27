<?php 


class Animal {


public $name;

function __construct($n) {
    $this->name = $n;

}

}


class Dog extends Animal {

public $breed;

    function __construct($n, $b) {
        parent::__construct($n);
        $this->breed = $b;
    }

    function getname() {
        return "The name of the dog is: " . $this->name."<br>";
    }

}

$s1 = new Dog("Jack", "German Shepherd");
echo $s1->getname();
echo "The breed of the dog is: " . $s1->breed;

?>