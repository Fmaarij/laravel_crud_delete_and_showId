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
        Schema::create('car_b_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('marque');
            $table->date('annee');
            $table->string('couleur');
            $table->decimal('prix');
            $table->integer('reduction');
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
        Schema::dropIfExists('car_b_d_s');
    }
};
