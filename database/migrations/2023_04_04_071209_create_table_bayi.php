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
        Schema::create('bayi', function (Blueprint $table) {
            $table->integer('no_urut')->primary();
            $table->string('nama', 50)->nullable();
            $table->string('alamat', 50)->nullable();
            $table->string('tanggal_lahir', 50)->nullable();
            $table->integer('bb_lahir')->nullable();
            $table->integer('tb_lahir')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayi');
    }
};
