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
        Schema::create('asmcp_1001_userid', function (Blueprint $table) {
            $table->string('id_1001', 255)->primary();
            $table->unsignedBigInteger('id')->unique();
            $table->string('nama')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->text('photo')->nullable();

            $table->foreign('id')->references('id')->on('asmcp_1000_user')->onDelete('cascade');
            $table->index(['id_1001', 'id', 'nama']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1001_userid');
    }
};
