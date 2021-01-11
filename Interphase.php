<?php

interface hello{
	public function show();
	public function display();
}

abstract class bye implements hello{
	abstract function printdata();
	public function display(){
		echo "display<br>";
		return $this;
	}
}
class seeyou extends bye {
	public function printdata(){
		echo "hello<br>";
		return $this;
	}
	public function show(){
		echo "show method<br>";
		return $this;
	}
}
$hello = new seeyou();
$hello->show();
?>