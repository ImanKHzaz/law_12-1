<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDefendantsNullableFields extends Migration
{
    public function up()
    {
        Schema::table('defendants', function (Blueprint $table) {
            $table->string('id_front_image')->nullable()->change();
            $table->string('id_back_image')->nullable()->change();
            $table->string('power_of_attorney')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('defendants', function (Blueprint $table) {
            $table->string('id_front_image')->nullable(false)->change();
            $table->string('id_back_image')->nullable(false)->change();
            $table->string('power_of_attorney')->nullable(false)->change();
        });
    }
}
