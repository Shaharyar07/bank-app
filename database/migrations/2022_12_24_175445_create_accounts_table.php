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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Account Holder');
            $table->string('Account Number');
            $table->string('Account Type');
            $table->string('Bank Name');
            $table->string('Branch');
            $table->string('IFSC Code');
            $table->string('Balance');
            $table->string('Status');
            $table->string('Investment');
            $table->string('Investment Amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
