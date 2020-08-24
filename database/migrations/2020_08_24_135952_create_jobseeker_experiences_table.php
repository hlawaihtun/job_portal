<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobseekerExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobseeker_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jobseeker_id');
            $table->string('company_name');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('job_position_id');
            $table->unsignedBigInteger('business_type_id');
            $table->string('is_active');
            $table->timestamps();

            $table->foreign('jobseeker_id')
            ->references('id')->on('users')
            ->onDelete('cascade');

             $table->foreign('job_position_id')
            ->references('id')->on('job_positions')
            ->onDelete('cascade');

             $table->foreign('business_type_id')
            ->references('id')->on('business_types')
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
        Schema::dropIfExists('jobseeker_experiences');
    }
}
