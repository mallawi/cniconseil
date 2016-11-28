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
        Schema::enableForeignKeyConstraints();

        Schema::create('acheter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forms_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->unsignedMediumInteger('postalcode')->nullable();
            $table->string('ville')->nullable();
            $table->string('type')->nullable();
            $table->string('budget')->nullable();
            $table->string('lieu')->nullable();
            $table->timestamps();

            $table->foreign('forms_id')->references('id')->on('forms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('acheter', function ($table) {
           $table->dropForeign(['forms_id']);
        });

        Schema::dropIfExists('acheter');
    }
}
