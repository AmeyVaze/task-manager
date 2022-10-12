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
        Schema::create('tasks', function (Blueprint $table) {

            $table->id('task_id'); 
            $table->date('assigned_at');
            $table->date('task_deadline');
            $table->boolean('seen')->default('0');

            $table->unsignedBigInteger('assigned_by_id');
            $table->foreign('assigned_by_id')->references('user_id')->on('users');

            $table->unsignedBigInteger('assigned_to_id');
            $table->foreign('assigned_to_id')->references('user_id')->on('users');

            $table->unsignedBigInteger('submodule_id');
            $table->foreign('submodule_id')->references('submodule_id')->on('modulesubmodule');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('client_id')->on('clients');

            $table->unsignedBigInteger('remark_id');
            $table->foreign('remark_id')->references('remark_id')->on('remarks');

              
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
        Schema::dropIfExists('tasks');
    }
};
