<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users',function($table){
			$table->timestamps();
			$table->increments('id');
			$table->string('name',30);
			$table->string('detail',150);
		});

		Schema::create('shops',function($table){
			$table->timestamps();
			$table->increments('id');
			$table->string('name',30);
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('detail',150);
		});

		Schema::create('manufacturers',function($table){
			$table->timestamps();
			$table->increments('id');
			$table->string('name',50);
			$table->string('address',150);
			$table->string('tel',15);
			$table->string('email',30);
			$table->string('country',20);
			$table->string('agent',50);
			$table->string('bank_name',50);
			$table->string('bank_number',50);
		});

		Schema::create('accounts',function($table) {
			$table->timestamps();
			$table->increments('id');
			$table->string('account_name',50);
			$table->string('bill_number',50);
			$table->date('order_date');
			$table->date('paid_date');
			$table->boolean('status');
			$table->integer('manufacturer_id')->unsigned();
			$table->foreign('manufacturer_id')->references('id')->on('manufacturers');

		});

		Schema::create('images',function($table){
			$table->timestamps();
			$table->increments('id');
			$table->string('path',100);
			$table->string('details',50);
		});

		Schema::create('products',function($table){
			$table->timestamps();
			$table->increments('id');
			$table->string('product_id',30);
			$table->integer('size');
			$table->string('colour',10);
			$table->integer('cost');
			$table->integer('price');
			$table->integer('quantity');
			$table->integer('account_id')->unsigned();
			$table->foreign('account_id')->references('id')->on('accounts');
		});

		Schema::create('shop_product',function($table){
			$table->timestamps();	
			$table->increments('id');
			$table->integer('shop_id')->unsigned();
			$table->foreign('shop_id')->references('id')->on('shops');
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
		});

		Schema::create('boards',function($table){
			$table->timestamps();
			$table->increments('id');
			$table->integer('from_shop');
			$table->integer('to_shop');
			$table->string('message',100);
			$table->integer('product_id')->unsigned();
			$table->foreign('product_id')->references('id')->on('products');
			$table->timestamp('time');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::drop('boards');
		Schema::drop('shop_product');
		Schema::drop('products');
		Schema::drop('images');
		Schema::drop('accounts');
		Schema::drop('manufacturers');
		Schema::drop('shops');
		Schema::drop('users');
	}

}
