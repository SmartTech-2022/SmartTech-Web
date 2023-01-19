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

            Schema::table('contestants', function (Blueprint $table) {
                $table->string('image')->nullable();
                $table->string('gender')->nullable();
                $table->string('party')->nullable();
                $table->string('party_logo')->nullable();

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contestants', function (Blueprint $table) {
            //
        });
    }
};
