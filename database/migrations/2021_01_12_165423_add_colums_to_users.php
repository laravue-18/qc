<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('company');
            $table->string('buyer');
            $table->string('phone')->nullable();
            $table->string('designation')->nullable();
            $table->string('employee_id')->nullable();
            $table->string('factory')->nullable();
            $table->string('order')->nullable();
            $table->string('style')->nullable();
            $table->text('comment')->nullable();
            // $table->string('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
