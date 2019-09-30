<?php

class rjit
{
	public $b="name";
	public function hello()
	{
		//echo $a; will not work
		echo $this->b;
		echo "aditi";
	}
	
	public function __construct()
	{
		echo "jain";
	}
}
$a= new rjit();
$a->hello();
?>