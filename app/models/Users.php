<?php 
/**
* 
*/
class Users extends Eloquent
{
	
	public function shops()
	{
		return $this->hasMany('Shops');
	}
}