<?php

class Tigger {

public static $instance; 

public static $getCounter = 0;
private function __construct() {
        echo "Building character..." . PHP_EOL;
        
}

public function roar() {
        echo "Grrr!" . PHP_EOL;
        self::$getCounter++;
}

public static function getInstance()
{
   if(!isset(self::$instance))
   {
       self::$instance = new Tigger;
   }
    return self::$instance;
    
} 

}

$tiger = Tigger::getInstance();
$tiger1 = Tigger::getInstance()->roar();
$tiger2 = Tigger::getInstance()->roar();
$tiger3 = Tigger::getInstance()->roar();
$tiger4 = Tigger::getInstance()->roar();
$tiger5 = Tigger::getInstance()->roar();

echo '<br>Tigger ha realitzat rugits: '.Tigger::$getCounter.' vegades!';

