<?php
/**
 * 
 */
class rjit
{
	public $name="Aditi";
	public $age=34;
	public $email = "aditijain083@gmail.com";
	
	public function user()
	{
		echo $this->name .$this->email .$this->age;
	}
}
$hello = new rjit();
$hello->user();
?>