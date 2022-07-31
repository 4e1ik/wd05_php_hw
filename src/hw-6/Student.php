<?php


class Student extends User {
    private $scholarship;
    private $course;

    public function getScholarship()
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function __construct($name, $age, $salary, $course, $scholarship){

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
        $this->course = $course;
        $this->scholarship = $scholarship;
    }
}