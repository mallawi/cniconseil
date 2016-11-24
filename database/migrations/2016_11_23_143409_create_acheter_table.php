<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcheterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acheter', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lname')->nullable();
            $table->string('fname')->nullable();
            $table->string('email')->nullable();
            $table->integer('phone');
            $table->integer('telephone');
            $table->string('address')->nullable();
            $table->integer('postalcode');
            $table->string('ville')->nullable();
            $table->string('type')->nullable();
            $table->string('budget')->nullable();
            $table->string('lieu')->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('acheter');
    }
}
