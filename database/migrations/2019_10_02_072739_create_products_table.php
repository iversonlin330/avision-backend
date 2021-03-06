<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->text('title');
			$table->text('slogan');
			$table->integer('type_id');
			$table->text('picture');
			$table->integer('flag');
			$table->text('characteristic');
			$table->text('characteristic_1');
			$table->text('characteristic_2');
			$table->text('characteristic_3');
			$table->text('description');
			$table->text('spec');
			$table->text('software');
			$table->text('cert');
			$table->text('filter');
			$table->text('accessory');
			$table->text('faq');
            $table->text('bonus');
			$table->integer('status');
			$table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
