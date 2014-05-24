<?php 
/**
* 
*/
class Boards extends Eloquent
{
	
	public function products()
	{
		return $this->belongsTo('Products');
	}
}