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
        Schema::create('modulesubmodule', function (Blueprint $table) {
            $table->id('module_id');
            $table->string('module_name');

            $table->unsignedBigInteger('submodule_id');
            $table->primary('submodule_id');

            $table->string('submodule_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('statutory_end_date');

            $table->unsignedBigInteger('task_list_id');
            $table->foreign('task_list_id')->references('task_list_id')->on('task_list');
            
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
        Schema::dropIfExists('modulesubmodule');
    }
};
