<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyects', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('person_id');
            // $table->foreign('person_id')->references('id')->on('natural_persons');
            $table->string("name");
            $table->string("commitment_document");
            $table->string("amount");
            $table->string("objective");
            $table->date("date_start")->nullable();
            $table->date("date_end")->nullable();
            $table->integer("transaction_number");

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
        Schema::dropIfExists('proyects');
    }
}
