<?php

//Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи
class Worker{
    public $name;
    public $age;
    public $salary;

//    public function __construct($name, $age, $salary){
//        $this->name = $name;
//        $this->age = $age;
//        $this->salary = $salary;
//    }
//
//    public function say(){
//        echo $this->name." ".$this->age." ".$this->salary;
//    }
}