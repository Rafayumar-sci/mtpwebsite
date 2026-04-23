<?php

class Name {
    public $name;
    public $salary;
    public $ts; 
    public $ot; 


    function setname($n, $s) {
        $this->name = $n;
        $this->salary = $s;
    }

    function getname() {
        return "Name: " . $this->name . "<br>" . "Salary: " . $this->salary . "<br>";
    }
}

class Em extends Name {
    function managerSalary($total) {
        $this->ts = $total;
        return "Total Salary (Manager): " . $this->ts . "<br><br>";
    }

    function overtime($overtime) {
        $this->ot = $overtime;
        return "Overtime: " . $this->ot . "<br><br>";
    }
}

$e1 = new Em();
$e1->setname("ahmed", 1999);
echo $e1->getname();
echo $e1->managerSalary(199999);

$e2 = new Em();
$e2->setname("ahmed", 1999);
echo $e2->getname();
echo $e2->overtime(500);

echo "Total Employees: 2";

?>