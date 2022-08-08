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
        Schema::create('asmcp_1006_userfile', function (Blueprint $table) {
            $table->string('id_1006', 255)->primary();
            $table->string('id_1001', 255);
            $table->string('filename', 255)->nullable();
            $table->string('genre', 255)->nullable();
            $table->string('artist', 255)->nullable();
            $table->string('album', 255)->nullable();
            $table->string('composer', 255)->nullable();
            $table->string('publisher', 255)->nullable();
            $table->text('ket')->nullable();
            $table->boolean('favorited')->nullable();
            $table->string('folder', 255)->nullable();
            $table->string('playlist', 255)->nullable();

            $table->foreign('id_1001')->references('id_1001')->on('asmcp_1001_userid')->onDelete('cascade');
            $table->foreign('folder')->references('id_1004')->on('asmcp_1004_userfolder')->onDelete('set null');
            $table->foreign('playlist')->references('id_1005')->on('asmcp_1005_userplaylist')->onDelete('set null');
            $table->index(['id_1006', 'id_1001', 'filename']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1005_userfile');
    }
};
