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
        Schema::create('submodules', function (Blueprint $table) {
            $table->id('submodule_id');
            $table->string('submodule_name');
            $table->date('start_date');
            $table->date('stat_end_date');
            $table->date('int_end_date');
            $table->unsignedBigInteger('module_id');
            $table->foreign('module_id')->references('module_id')->on('modules');
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
        Schema::dropIfExists('submodules');
    }
};
