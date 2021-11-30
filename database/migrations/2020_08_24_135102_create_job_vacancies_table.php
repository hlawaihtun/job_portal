<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_vacancies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('job_title');
            $table->unsignedBigInteger('job_type_id');
            $table->unsignedBigInteger('job_position_id');
            $table->string('job_description');
            $table->string('job_salary');
            $table->string('howtoapply');
            $table->string('job_location');
            $table->string('job_request');
            $table->date('last_apply_date');
            $table->string('is_active');
            $table->timestamps();

            $table->foreign('company_id')
            ->references('id')->on('companies')
            ->onDelete('cascade');

            $table->foreign('job_type_id')
            ->references('id')->on('jobtypes')
            ->onDelete('cascade');

            $table->foreign('job_position_id')
            ->references('id')->on('job_positions')
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
        Schema::dropIfExists('job_vacancies');
    }
}
