<?php

$i = 1;

do {

    echo $i;
echo "<br>";

    $i++;

    }

    while ($i <= 10);

?>




<?php

function sortarray($array) {

sort($array);
    return $array;

    }

$numbers = [32, 45, 8, 7,23, 50, 67];

$sort = sortarray($numbers);

for ($i = 0; $i < count($sort); $i++) {

echo $sort[$i] ;

echo "<br>";

}


?>


<?php

$months = ["January", "February", "March", "April", "May", "June", "July","August","september","october","november","December"];

$delete = "June";

foreach ($months as $key => $value) {
    
if ($value == $delete) {
        
    unset($months[$key]);
    
    }

    }

foreach ($months as $month) {

echo $month;

    echo "<br>";
}

?>


<?php

class Fruits {

    public $name;
    public $marks;

    function setdata($n, $m) {

    $this->name = $n;
        $this->marks = $m;

        }

    function checkresult() {

    if ($this->marks >= 50) {

    return "Pass";

    }
    
    else {

    return "Fail";

    }

    }

}

$student1 = new Student();

$student1->setdata("Ali", 65);

echo $student1->name;

echo "<br>";

echo $student1->marks;

echo "<br>";

echo $student1->checkresult();

?>