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
        Schema::create('data_konsumens', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("Nama");
            $table->string("Email");
            $table->integer("Number");
            $table->string("Message");
            $table->integer("Waktu");
            $table->date("Tanggal");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_konsumens');
    }
};
