<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyDocumentsTableRemoveExtraFields extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            // إسقاط المفتاح الخارجي أولاً
            $table->dropForeign(['client_id']);
            // ثم إسقاط العمود
            $table->dropColumn('client_id');
            $table->dropColumn('id_front_image');
            $table->dropColumn('id_back_image');
            $table->dropColumn('power_of_attorney');
        });
    }

    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->string('id_front_image');
            $table->string('id_back_image');
            $table->string('power_of_attorney');

            // إعادة تعريف العلاقات
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }
}
