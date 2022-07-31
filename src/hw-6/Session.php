<?php


class Session{

    public function __construct(){
        return session_start();
    }

    public function getSession($name){
        if(!empty($_SESSION)){
            return $_SESSION[$name];
        }
    }

    public function setSession($name, $value){
        $this->name=$name;
        $this->value=$value;

        return $_SESSION[$name]=$value;
    }

    public function chekSession(){
        return (!empty($_SESSION));
    }
}