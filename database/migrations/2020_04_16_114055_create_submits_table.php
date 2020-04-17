<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('status');
            $table->string('type');
            $table->string('price');
            $table->string('area');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('image');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('description');
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
        Schema::dropIfExists('submits');
    }
}
