<?php

echo (" when we want to avoid hard code dependency injection helps in avoiding it and it can be changed at the 
       runtime and at the compile time as well")."</br>";

   class Animal {
      private $type;
      public function __construct($type){

         $this->type = $type;

  
 }
      public function totaltype(){

         return count($this->type);

      }
   }

   $Totaltypes = array("Lion", "cheetu", "Sheru");
    $p = new Animal($Totaltypes);
   echo $p->totaltype();

?>