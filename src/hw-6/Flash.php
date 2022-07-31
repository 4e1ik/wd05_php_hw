<?php


class Flash{
    public function __construct(){
        $this->sess = new Session;
    }

    public function setMessage(){
        return $this->sess->setSession($name, $value);
    }

    public function getMessage(){

    }
}