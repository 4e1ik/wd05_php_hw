<?php


class Student extends Human{
    public function sayAnswer(){
        return "I dont know";
    }

    public function sayHello()
    {
        return $this->name." ".$this->age;
    }
}