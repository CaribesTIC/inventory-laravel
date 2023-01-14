<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();            
            $table->string('int_cod', 15);
            $table->string('name',50);
            $table->float('price')->default(100);
            $table->integer('stock_min')->default(5);
            $table->integer('stock_max')->default(5);
            $table->integer('status')->default(1);
            $table->string('photo')->default('');          
            $table->integer('id_user_insert')->default(1);
            $table->integer('id_user_update')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
