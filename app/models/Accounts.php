<?php
/**
* 
*/
class Accounts extends Eloquent
{
	
	public function manufacturers()
	{
		return $this->belongsTo('Manufacturers');
	}

	public function products(){
		return $this->hasMany('Products');
	}
}