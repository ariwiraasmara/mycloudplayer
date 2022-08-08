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
        Schema::create('asmcp_1003_usersecurity', function (Blueprint $table) {
            $table->string('id_1003', 255)->primary();
            $table->string('id_1001', 255)->unique();
            $table->text('device1')->nullable();
	        $table->enum('device_type1', ['pc','mobile','other'])->nullable();
	        $table->enum('device_os1', ['windows','linux','macos'])->nullable();
	        $table->text('device2')->nullable();
	        $table->enum('device_type2', ['pc','mobile','other'])->nullable();
	        $table->enum('device_os2', ['windows','linux','macos'])->nullable();

            $table->foreign('id_1001')->references('id_1001')->on('asmcp_1001_userid')->onDelete('cascade');
            $table->index(['id_1003', 'id_1001']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1003_usersecurity');
    }
};
