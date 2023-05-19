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
        Schema::create('clients', function (Blueprint $table) {

            $table->id('client_id');
            $table->string('type_of_org');
            $table->string('client_name');
            $table->text('registered_address');
            $table->text('billing_address');
            $table->string('PAN')->unique();
            $table->string('TAN')->unique()->nullable();
            $table->string('GSTIN')->unique()->nullable();
            $table->string('cp_name');
            $table->string('cp_phone')->unique();
            $table->string('cp_email')->unique();
            $table->boolean('is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
