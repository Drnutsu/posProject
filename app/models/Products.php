<?php
/**
* 
*/
class Products extends Eloquent
{
	
	public function accounts()
	{
		return $this->belongsTo('accounts');
	}

	public function images()
	{
		return $this->belongsTo('Images');
	}

	public function shops() {

		return $this->belongsToMany('Shops');
	}

	public function boards(){
		return $this->hasMany('Boards');
	}
}