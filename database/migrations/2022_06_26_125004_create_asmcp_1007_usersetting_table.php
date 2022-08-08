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
        Schema::create('asmcp_1007_usersetting', function (Blueprint $table) {
            $table->string('id_1007', 255)->primary();
            $table->string('id_1001', 255)->unique();
            $table->enum('theme', ['#000', '#fff'])->nullable();
            $table->enum('text', ['#000', '#fff'])->nullable();
            $table->text('bar')->nullable();
            $table->text('wall_img')->nullable();
            $table->integer('wall_heigth')->nullable();
            $table->integer('wall_width')->nullable();
            $table->text('wall_size')->nullable();
            $table->text('wall_position')->nullable();
            $table->enum('wall_repeat', ['repeat', 'repeat-x', 'repeat-y', 'no-repeat'])->nullable();
            $table->enum('wall_attachment', ['scroll', 'fixed'])->nullable();

            $table->foreign('id_1001')->references('id_1001')->on('asmcp_1001_userid')->onDelete('cascade');
            $table->index(['id_1007', 'id_1001']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1007_usersetting');
    }
};
