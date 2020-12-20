<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('trainings', function (Blueprint $table) {
      $table->id();
      $table->string('title');
      $table->string('description');
      $table->enum('trainingType', ['short', 'full']);
      $table->string('amount');
      $table->string('avatar');
      $table->enum('published', ['yes', 'no'])->default('no');
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
    Schema::dropIfExists('trainings');
  }
}
