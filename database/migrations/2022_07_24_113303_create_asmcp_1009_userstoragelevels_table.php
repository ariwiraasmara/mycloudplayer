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
    public function up() {
        Schema::create('asmcp_1009_userstoragelevel', function (Blueprint $table) {
            $table->string('id_1009', 255)->primary();
            $table->string('id_1001', 255)->unique();
            $table->unsignedInteger('level');
            $table->timestamp('upgraded_lvl2_at')->nullable();
            $table->timestamp('upgraded_lvl3_at')->nullable();
            $table->timestamp('upgraded_lvl4_at')->nullable();
            $table->timestamp('upgraded_lvl5_at')->nullable();
            $table->timestamp('upgraded_lvl6_at')->nullable();
            $table->timestamp('upgraded_lvl7_at')->nullable();
            $table->timestamp('upgraded_lvl8_at')->nullable();
            $table->timestamp('upgraded_lvl9_at')->nullable();

            $table->foreign('id_1001')->references('id_1001')->on('asmcp_1001_userid')->onDelete('cascade');
            //$table->foreign('level')->references('id_1008')->on('asmcp_1008_levelingsystem')->onDelete('set null');
            $table->index(['id_1009', 'id_1001', 'level']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1009_userstoragelevel');
    }
};
