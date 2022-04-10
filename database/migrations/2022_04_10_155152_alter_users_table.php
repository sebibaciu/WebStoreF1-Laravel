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
    //adauga doua coloane noi admin/client
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('client');
            $table->integer('balance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //drop la role si balance
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role']);
            $table->dropColumn(['balance']);
        });
    }
};
