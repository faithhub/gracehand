<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnershipsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('partnerships', function (Blueprint $table) {
      $table->id();
      $table->string('fullName');
      $table->string('email', 200)->unique();
      $table->string('mobile');
      $table->string('address');
      $table->string('refCode', 6);
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
    Schema::dropIfExists('partnerships');
  }
}
