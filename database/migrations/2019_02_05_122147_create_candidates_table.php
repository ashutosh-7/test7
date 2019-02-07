<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stdno');
            $table->string('name');
            $table->string('branch');
            $table->integer('year');
            $table->string('course');
            $table->string('blood');
            $table->string('email');
            $table->integer('phone');  
            $table->string('address');
            $table->string('host');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
    
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
     */
}
