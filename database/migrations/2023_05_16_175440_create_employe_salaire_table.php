<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe_salaire', function (Blueprint $table) {
            $table->increments('id', true);
            $table->integer('employee_id')->unsigned();
            $table->foreign('employee_id')->references('id')->on('employe');
            $table->decimal('salary', 16, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employe_salaire');
    }
};
