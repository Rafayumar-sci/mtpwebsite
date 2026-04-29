<?php

class Calculator {

public function __call($name, $arguments) {

if ($name == 'add') 

    {

    return array_sum($arguments);

    }

}

}






$calc = new Calculator();

echo $calc->add(2, 3). "<br>";
echo $calc->add(2,3,4,5);

?> 