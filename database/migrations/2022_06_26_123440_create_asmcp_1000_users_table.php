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
        Schema::create('asmcp_1000_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username', 255)->unique();
            $table->string('email')->unique();
            $table->text('password');
            $table->string('tlp', 20)->unique()->nullable();
            $table->string('pin')->nullable();
            $table->string('remember_token', 10)->unique()->nullable();

            //$table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->index(['id', 'username', 'email', 'tlp']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1000_user');
    }
};
