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
        Schema::create('asmcp_1008_levelingsystem', function (Blueprint $table) {
            $table->increments('id_1008');
            $table->integer('level');
            $table->integer('memory');
            $table->integer('monthly_pay_usd');
            $table->integer('yearly_pay_usd');
            $table->integer('lifetime_pay_usd');

            $table->index(['level', 'memory']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asmcp_1008_levelingsystem');
    }
};
