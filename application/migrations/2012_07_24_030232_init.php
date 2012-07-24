<?php

class Init {

  /**
   * Make changes to the database.
   *
   * @return void
   */
  public function up()
  {

    /*
    *  Info of address the order will be shipped to
    */
    Schema::create('shipping_metadata', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('address');
      $table->string('address2');
      $table->string('city');
      $table->string('state');
      $table->string('zip');
      $table->string('country');
      $table->integer('phone');
      $table->string('email')->unique();
    });

    /*
    * View respective status, for now used in Products and Orders
    */
    Schema::create('statuses', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('status');
      $table->string('description');
    });

    /*
    *  Save products that will be listed for sale in the application
    */
    Schema::create('products', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('name');
      $table->text('blurb');
      $table->string('sku');
      $table->float('base_price');
      $table->boolean('customizable');
      $table->integer('stock_count');
      $table->string('location');
      $table->text('description');
      $table->string('class');
      $table->integer('status_id')->unsigned()->index();
      $table->integer('user_id')->unsigned()->index();
      $table->timestamps();

      $table->foreign('status_id')->references('id')->on('statuses');
      $table->foreign('user_id')->references('id')->on('users');
    });

    /*
    * Save orders placed by users in the system
    */
    Schema::create('orders', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->float('amount');
      $table->float('tax')->nullable();
      $table->integer('product_id')->unsigned()->index();
      $table->integer('user_id')->unsigned()->index();
      $table->integer('status_id')->unsigned()->index();
      $table->timestamps();

      $table->foreign('product_id')->references('id')->on('products');
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('status_id')->references('id')->on('statuses');


    });

    /*
    *  The options available for the customization of the products
    */
    Schema::create('options', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('option');
      $table->string('description');
      $table->integer('option_groups_id')->unsigned()->index();
    });

    /*
    * The groups that options belong to
    */
    Schema::create('option_groups', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('name');
      $table->string('description');
    });


    /*
    *  Save the images relating to a product
    */
    Schema::create('images', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('name');
      $table->string('full');
      $table->string('cropped');
      $table->string('thumbnail');
      $table->integer('product_id')->unsigned()->index();
      $table->timestamps();

      $table->foreign('product_id')->references('id')->on('products');
    });

    /*
    * Save the vidoes relating to a product
    */
    Schema::create('videos', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('name');
      $table->string('url');
      $table->integer('product_id')->unsigned();

      $table->foreign('product_id')->references('id')->on('products');
    });

    /*
    * The product categories
    */
    Schema::create('categories', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('category');
      $table->integer('parent_category_id')->unsigned()->nullable();

    });

    /*
    * The keywords that relates to respective categories
    */
    Schema::create('keywords', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('keyword');
      $table->integer('category_id')->unsigned()->index();

      $table->foreign('category_id')->references('id')->on('categories');
    });

    /*
    * The tags for products
    */
    Schema::create('tags', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('tag');
      $table->integer('product_id')->unsigned()->index();

      $table->foreign('product_id')->references('id')->on('products');
    });

    /*
    *  Curator of possible discounts
    */
    Schema::create('discounts', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->string('code');
      $table->float('value');
    });

    /*
    * 	Pivot table of orders being shipping
    */
    Schema::create('orders_shipping', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id')->unsigned();
      $table->integer('shipping_id')->unsigned()->index();
      $table->integer('order_id')->unsigned()->index();

      $table->foreign('shipping_id')->references('id')->on('shipping_metadata');
      $table->foreign('order_id')->references('id')->on('orders');
    });

    /*
    *  Pivot table of the orders and the product (details of the order)
    */
    Schema::create('order_details', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id');
      $table->integer('order_id')->unsigned()->index();
      $table->integer('product_id')->unsigned()->index();

      $table->foreign('order_id')->references('id')->on('orders');
      $table->foreign('product_id')->references('id')->on('products');
    });

    /*
    *  Pivot table of products and their respect options
    */
    Schema::create('product_options', function($table)
    {
      $table->engine = "InnoDB";
      $table->increments('id');
      $table->integer('product_id')->unsigned()->index();
      $table->integer('option_id')->unsigned()->index();
      $table->integer('option_group_id')->unsigned()->index();

      $table->foreign('product_id')->references('id')->on('products');
      $table->foreign('option_id')->references('id')->on('options');
      $table->foreign('option_group_id')->references('id')->on('option_groups');
    });
  }

  /**
   * Revert the changes to the database.
   *
   * @return void
   */
  public function down()
  {

    Schema::drop('images');
    Schema::drop('videos');
    Schema::drop('keywords');
    Schema::drop('tags');
    Schema::drop('discounts');
    Schema::drop('orders_shipping');
    Schema::drop('order_details');
    Schema::drop('shipping_metadata');
    Schema::drop('product_options');
    Schema::drop('categories');
    Schema::drop('option_groups');
    Schema::drop('options');
    Schema::drop('products');
    Schema::drop('orders');
    Schema::drop('statuses');

  }

}