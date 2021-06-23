<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 100);
            $table->date('date');
            $table->integer('passenger');	
            $table->string('description', 255);
            $table->string('activities', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travels', function (Blueprint $table){
            $table->dropColumn('name', 100);
            $table->dropColumn('date');
            $table->dropColumn('passenger');	
            $table->dropColumn('description', 255);
            $table->dropColumn('activities', 255);
        });

    }
}
