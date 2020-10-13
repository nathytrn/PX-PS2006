<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type')->nullable();   
            $table->unsignedInteger('artist_id');
            $table->unsignedInteger('user_id');
            $table->string('stage')->default('Created');
            $table->boolean('completed')->default(false);
            $table->date("date")->nullable();   
            $table->time("time")->nullable();
            $table->text('description')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
