<?php
class Fruit {

    public $name;

    public $color;

    function   get__detail($name, $color) {

        $this->name = $name;

        $this->color = $color;
    }

   
    function intro() {

        echo "This fruit is a {$this->name} and its color is {$this->color}.<br>";
    }
}
?>