<?php

 

echo("Traits are used to declare methods that can be used in multiple classes.")."</br>"; 
trait msg {
  public function hello() {       
    
    echo " This is a Trait ";  
}

}

class Traits {
  use msg;              
}


$obj = new Traits();    

$obj->hello();




?>