<?php 
/**
* 
*/
class Manufacturers extends Eloquent
{
	
	public function accounts()
	{
		return $this->hasMany('Accounts');
	}
}