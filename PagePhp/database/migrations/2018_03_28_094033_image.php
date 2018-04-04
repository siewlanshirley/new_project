<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Image extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       // Schema::create('image', function(Blueprint $table)

            //$table->increments('imageId');

            //$table->integer('pageId')->unsigned();

            //$table->string('source_loc');
            
            //$table->timestamps();


        Schema::create('image', function(Blueprint $table) {

            $table->increments('imageId');

            $table->integer('pageId')->unsigned();

            $table->string('source_loc');
            
            $table->timestamps();
        });

        Schema::table('image', function(Blueprint $table) {
            $table->foreign('pageId')->references('id')->on('tblPage');
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
