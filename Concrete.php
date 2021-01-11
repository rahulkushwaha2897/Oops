<?php

abstract class Lion {

abstract protected function showHomeWork($work);

}
class cubs extends Lion {

public function showHomeWork( $work = 'meat' ) {

 $work = 'I am eating on '.$work;

 return $work;

}

public function startWork($work) {

 return $this->showHomeWork($work);
         
}
     
}
?>