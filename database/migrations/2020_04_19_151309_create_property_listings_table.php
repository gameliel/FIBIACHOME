<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_listings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('property_status');
            $table->string('property_type');
            $table->integer('property_price');
            $table->string('property_area');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('image');
            $table->string('property_address');
            $table->string('city');
            $table->string('state');
            $table->string('zip_code');
            $table->string('property_description');
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
        Schema::dropIfExists('property_listings');
    }
}
