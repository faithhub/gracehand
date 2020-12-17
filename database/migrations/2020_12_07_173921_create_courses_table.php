<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('cover');
            $table->string('Tutor_name');
            $table->string('Tutor_avatar');
            $table->integer('amount');
            $table->text('material');
            $table->string('material_file')->nullable();
            $table->string('material_video')->nullable();
            $table->enum('status', ['Active', 'Non-Active'])->default('Active');
            $table->integer('applied_users')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
