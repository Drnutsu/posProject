<?php
	/**
	* 
	*/
	class Shops extends Eloquent
	{
		
		public function users()
		{
			return $this->belongsTo('Users');
		}

		public function products(){

			return $this->belongsToMany('Products');
		}
	}