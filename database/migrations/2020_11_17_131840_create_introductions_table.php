<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntroductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('introductions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName');
            $table->string('dob');
            $table->string('website');
            $table->longText('detail')->nullable();
            $table->string('email');
            $table->string('heading');
            $table->string('expBody1');
            $table->string('expTitle1');
            $table->string('expBody2');
            $table->string('expTitle2');
            $table->string('expBody3');
            $table->string('expTitle3');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1);
            $table->softDeletes();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('introductions');
    }
}
