<?php

class Person {
    private $firstname;
    private $lastname;

    public function setID($pFirstname, $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }

}


$person1 = new Person();

$person1->setID("John", "Poupe");

$person2 = new Person();

$person2->setID("poupe", "oupapipe");




var_dump($person1);

var_dump($person2);
