<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplypostRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applypost_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_vacancy_id');
            $table->unsignedBigInteger('jobseeker_id');
            $table->timestamps();

            $table->foreign('job_vacancy_id')
            ->references('id')->on('job_vacancies')
            ->onDelete('cascade');

            $table->foreign('jobseeker_id')
            ->references('id')->on('jobseekers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applypost_records');
    }
}
