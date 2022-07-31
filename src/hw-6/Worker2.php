<?php

//2. Сделайте класс Worker2, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge,
//setSalary, getSalary. Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000. Выведите на экран сумму зарплат Ивана и Васи.
//Выведите на экран сумму возрастов Ивана и Васи.

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