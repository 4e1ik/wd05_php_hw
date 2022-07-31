<?php

class Worker2{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        if ($this->checkAge($age)){
            $this->age = $age;
        }
    }

    private function checkAge($age){
        if ($age < 100) {
            return true;
        } else {
            return false;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }
}