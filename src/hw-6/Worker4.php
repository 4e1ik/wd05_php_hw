<?php


class Worker4 extends User {
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

    public function __construct($name, $age, $salary){
        $this->name = $name;
        $this->age= $age;
        $this->salary = $salary;
    }
}

?>