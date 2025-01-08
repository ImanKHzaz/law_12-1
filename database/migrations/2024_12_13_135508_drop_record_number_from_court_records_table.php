<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropRecordNumberFromCourtRecordsTable extends Migration
{
    public function up()
    {
        Schema::table('court_records', function (Blueprint $table) {
            $table->dropColumn('record_number');
        });
    }

    public function down()
    {
        Schema::table('court_records', function (Blueprint $table) {
            $table->integer('record_number')->default(0);
        });
    }
}
