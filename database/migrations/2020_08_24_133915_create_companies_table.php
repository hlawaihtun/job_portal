<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->text('photo');
            $table->string('company_name');
            $table->string('company_reg_no');
            $table->string('company_size');
            $table->string('company_location');
            $table->string('company_description');
            $table->unsignedBigInteger('business_type_id');
            $table->unsignedBigInteger('employer_id');
            $table->timestamps();

            $table->foreign('business_type_id')
            ->references('id')->on('business_types')
            ->onDelete('cascade');

             $table->foreign('employer_id')
            ->references('id')->on('employers')
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
        Schema::dropIfExists('companies');
    }
}
