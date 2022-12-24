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
        //
        Schema::create('request_data', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->date('proposed_date')->nullable();
            $table->string('student_level')->nullable();
            $table->integer('number_of_student')->nullable();
            $table->string('status')->nullable();
            $table->string('resource_type')->nullable();
            $table->integer('resource_number')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
