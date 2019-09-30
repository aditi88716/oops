<?php
/**
 * 
 */
class rjit
{
	public $name="Aditi Jain";
	public $age=12;
	
	public function hello()
	{
		echo "hello you are in function";
	}
}
$a=new rjit();
//$b=new rjit();
//$b->hello();
echo $a->name;
$a->hello();
?>