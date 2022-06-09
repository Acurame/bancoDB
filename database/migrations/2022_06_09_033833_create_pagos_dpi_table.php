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
        Schema::create('pagos_dpi', function (Blueprint $table) {
            $table->id();
            $table->string('dpi');
            $table->string('nombre');
            $table->dateTime('fechaPago');
            $table->decimal('monto');
            $table->integer('estado');
            $table->unsignedBigInteger('ornato_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ornato_id')->references('id')->on('ornato')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos_dpi');
    }
};
