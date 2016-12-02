<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendre', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forms_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->unsignedMediumInteger('postalcode')->nullable();
            $table->string('ville')->nullable();
            $table->string('type')->nullable();
            $table->string('prix')->nullable();
            $table->string('address_bien')->nullable();
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
        Schema::table('vendre', function ($table) {
           $table->dropForeign(['forms_id']);
        });

        Schema::dropIfExists('vendre');
    }
}
