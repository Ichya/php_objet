<?php

class Person {
    private $firstname;
    private $lastname;
/*
    public function setID($pFirstname, $pLastname) {
        $this->firstname = $pFirstname;
        $this->lastname = $pLastname;
    }
*/
    public function setFirstname($pFirstname) {
        $this->firstname = $pFirstname;
    }

    public function setLastname($pLastname) {
        $this->lastname = $pLastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }

    public function speak() {
        return "Hey, my name is what? my name is who ? my name is " . $this->firstname . "" . $this->lastname;
    }
}


$person1 = new Person();

$person1->setFirstname("Slim");
$person1->setLastname("Shady");
//$person1->setID("John", "Poupe");

$person2 = new Person();

//$person2->setID("poupe", "oupapipe");

var_dump($person1->speak());
//var_dump($person1->getLastname());
