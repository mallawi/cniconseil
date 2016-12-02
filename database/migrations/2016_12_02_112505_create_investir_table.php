<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investir', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('forms_id')->unsigned()->nullable();
            $table->string('address')->nullable();
            $table->unsignedMediumInteger('postalcode')->nullable();
            $table->string('ville')->nullable();
            $table->string('revenu')->nullable();
            $table->string('impots')->nullable();
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
        Schema::table('investir', function ($table) {
           $table->dropForeign(['forms_id']);
        });

        Schema::dropIfExists('investir');
    }
}
