<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProducts extends Migration
{
    public function up()
     {
     Schema::create('products', function (Blueprint $table) {
     $table->increments('id');
     $table->timestamps();
     $table->string('imagePath');
     $table->string('title');
     $table->text('description');
     $table->integer('price');
     $table->string('color');
     });
     }
    public function down()
     {
     Schema::dropIfExists('products');
     }
}