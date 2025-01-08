<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lawsuit_id');  // رقم القضية المرتبط بها
            $table->unsignedBigInteger('client_id');  // رقم الموكل المرتبط به
            $table->string('id_front_image');  // الهوية الأمامية للموكل
            $table->string('id_back_image');  // الهوية الخلفية للموكل
            $table->string('power_of_attorney');  // سند التوكيل
            $table->json('attachments');  // المرفقات (يسمح بأكثر من 5 مرفقات)
            $table->timestamps();

            // التعريف بالعلاقات
            $table->foreign('lawsuit_id')->references('id')->on('lawsuits')->onDelete('cascade');
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
