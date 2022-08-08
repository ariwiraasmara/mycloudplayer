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
        Schema::create('asmcp_1004_userfolder', function (Blueprint $table) {
            $table->string('id_1004', 255)->primary();
            $table->string('id_1001', 255);
            $table->string('foldername')->nullable();
            $table->text('ket')->nullable();

            $table->foreign('id_1001')->references('id_1001')->on('asmcp_1001_userid')->onDelete('cascade');
            $table->index(['id_1004', 'id_1001', 'foldername']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1004_userfolder');
    }
};
