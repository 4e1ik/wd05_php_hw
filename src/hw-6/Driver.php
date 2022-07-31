<?php


class Driver extends Worker4 {
    private $drivingExperience;
    private $drivingCategory;

    public function __construct($name, $age, $salary, $drivingExperience, $drivingCategory){
        parent::__construct($name, $age, $salary);
        $this->drivingExperience = $drivingExperience;
        $this->drivingCategory = $drivingCategory;
    }
}