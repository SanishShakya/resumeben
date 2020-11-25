<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryIntroductionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_introduction', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('introduction_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('introduction_id')->references('id')->on('introductions');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->softDeletes();
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
        Schema::dropIfExists('category_introduction');
    }
}
