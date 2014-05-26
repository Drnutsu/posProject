<?php 
/**
* 
*/
class ProductsController extends BaseController
{
	public function productsHome(){
		return View::make('productsHome');
	}
	
	public function create()
	{
		return View::make('productsCreate');
	}

	public function createHandle(){
		return View::make('createHandle');
	}

	public function edit() {
		return View::make('productsEdit');
	}

	public function editHandle(){
		return View::make('editHandle');
	}

	public function delete() {
		retunr View::make('productsDelete');
	}

	public function deleteHandle(){
		return View::make('deleteHandle');
	}


}