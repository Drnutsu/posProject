<?php 
/**
* 
*/
class Images extends Eloquent
{
	
	public function products()
	{
		return $this->hasMany('Products');
	}
}