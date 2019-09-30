<?php
 class countries
{
	public $one="india";
	public $two="china";
	public $three="japan";
}

 class players extends countries
{
	protected $name1="aditi";
	public $name2 ="jain";
	public $name3 ="hello";
}
 class eat extends players
{
	public $tea1="tea";
		public function getplayer()
		{
			return $this->name1 .$this->name2 .$this->name3 .$this->one .$this->two .$this->three;
		}
}
$a=new eat();
echo $a->getplayer();
?>