<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('avatar')->default('default-img.jpg');
            $table->date('DOB')->nullable();
            $table->string('address')->nullable();
            $table->integer('postcode')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->text('bio')->nullable();    
            $table->string('creativeDiscipline1')->nullable();
            $table->text('creativeDetails1')->nullable();     
            $table->string('creativeDiscipline2')->nullable();   
            $table->text('creativeDetails2')->nullable();  
            $table->string('facebook')->nullable(); 
            $table->string('instagram')->nullable(); 
            $table->text('note')->nullable();
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
        Schema::dropIfExists('artists');
    }
}
