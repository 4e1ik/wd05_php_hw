<?php

class Form{

    protected function array($arr){ //изменено на protected для 8го задания
        $str = '';

        foreach ($arr as $key => $item) {
            $str=$str."$key".'='."'$item'"." ";
        }

        return  $str;

    }

    public function input($arr){
        $a = $this->array($arr);
        return "<input $a>";
    }

    public function sumbit($arr){
        $a = $this->array($arr);
        return "<input $a>";
    }

    public function password($arr){
        $a = $this->array($arr);
        return "<input $a>";
    }

    public function textarea($arr){
        $a = $this->array($arr);
        return "<textarea $a>";
    }

    public function open($arr){
        $a = $this->array($arr);
        return "<form $a>";
    }

    public function close(){
        return "</form>";
    }

    public function varDumb(){
        return var_dump($_POST);
    }
}