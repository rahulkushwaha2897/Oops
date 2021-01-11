<?php

// When many methods are called in a single instruction, then it is called Method Chaining.

class person
{
private $name;
private $age;
private $bike;


public function setName($name)
{
$this->name=$name;
return $this;
}
public function setAge($age)
{
$this->age=$age;
return $this;
}
public function setFruit($fruit)
{
$this->fruit=$fruit;
return $this;
}

public function getInformation()
{
echo " My name is ".$this->name." and I am ".$this->age." years old , i like eating ".$this->fruit
." at my home " ; //....simple printing the out put

}
}
$person = new person();  //creating object




$person->setName("rahul")->setAge("21")->setFruit("apple")->getInformation(); 

?>