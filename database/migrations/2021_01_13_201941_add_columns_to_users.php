<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('pass')->default(0);
            $table->bigInteger('alter')->default(0);
            $table->bigInteger('washing')->default(0);
            $table->bigInteger('sewing')->default(0);
            $table->bigInteger('finishing')->default(0);
            $table->bigInteger('reject')->default(0);
            $table->bigInteger('other')->default(0);
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
