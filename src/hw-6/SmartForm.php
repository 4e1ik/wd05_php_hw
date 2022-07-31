<?php

class SmartForm extends Form {

    public function input($arr){
        $a = $this->array($arr);
        if(!empty($_POST)){
            $pass = "value=".$_POST['name'];
            $a = $a.$pass;
            return "<input $a>";
        } else {
            return "<input $a>";
        }

    }

    public function password($arr){
        $a = $this->array($arr);
        if(!empty($_POST)){
            $pass = "value=".$_POST['pass'];
            $a = $a.$pass;
            return "<input $a>";
        } else {
            return "<input $a>";
        }

    }





}