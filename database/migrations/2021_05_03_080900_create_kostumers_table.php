<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKostumersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kostumer', function (Blueprint $table) {
            $table->id();
            $table->string('id_kostumer', 5);
            $table->string('nama_lengkap', 50);
            $table->string('alamat_kostumer', 50);
            $table->string('telpon', 15);
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
        Schema::dropIfExists('kostumer');
    }
}
