<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yhs', function (Blueprint $table) {
            $table->increments('id');

            $table->string("name");

            $table->string("imgs");

            $table->string("sex");

            $table->integer("age");

            $table->string("tel");

            $table->string("address");

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
        Schema::dropIfExists('yhs');
    }
}
