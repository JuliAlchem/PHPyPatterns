<?php

class Duck {

    public function quack() {
           echo "Quack <br>";
    }

    public function fly() {
           echo "I'm flying <br>";
    }
}

class Turkey {

    public function gobble() {
           echo "Gobble gobble <br>";
    }

    public function fly() {
    echo "I'm flying a short distance <br>";
    }
}

class TurkeyAdapter extends Duck

{
    private $turkey;

    public function __construct (Turkey $turkey)
    {
        $this->turkey = $turkey;
    }

    public function quack() {
        echo "Gobble gobble <br>";
    }
    
    public function fly() {
        for ($i=0; $i<5; $i++){
    echo "I'm flying a short distance <br>";
        }
    }
    
}

function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
    
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...<br>";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...<br>";
duck_interaction($duck);
echo "The TurkeyAdapter says...<br>";


duck_interaction($turkey_adapter);