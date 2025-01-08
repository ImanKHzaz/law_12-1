<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::table('lawsuits', function (Blueprint $table) {
            $table->enum('lawsuit_type', ['مدني', 'شرعي', 'عسكري', 'جنائي'])->change();
        });
    }

    public function down()
    {
        Schema::table('lawsuits', function (Blueprint $table) {
            $table->enum('lawsuit_type', ['Civil', 'Religious', 'Military', 'Criminal'])->change();
        });
    }
};
