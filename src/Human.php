<?php
    class Human{
        protected $age; //Поле объекта. При использовании __constructon можно не указывать, они создадутся динамически и с public по умолчанию
        protected $name;
        public $sex;

        public static $pensionAge = 60;



        const TOOTH = 32;

        public function __construct($name, $age, $sex){ //public  $name... Только в версии php 8.0 и выше
            $this->name = $name;
            $this->age = $age;
            $this->sex = $sex;
        }

        public function __destruct(){ //Вызывается только в момент уничтожения переменной. Лучше им не пользоваться!!! ВООБЩЕ!!!
            echo 'dsfvg';

        }

        public static function getPensionAge(){
            return self::$pensionAge;
        }

        public function sayHello(){ //Метод объекта
            return $this->name." ".$this->age." ".self::TOOTH;
        }

        public function setName($name){
            if (mb_strlen($name)<3){
                return false;
            } else {
                $this->name = ucfirst($name);
                return true;
            }
        }

        public function getName(){
            return $this->name;
        }
    }


?>