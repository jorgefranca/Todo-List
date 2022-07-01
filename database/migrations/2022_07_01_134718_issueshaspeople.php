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
      Schema::create('issueshaspeople', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->integer('issues_id');
          $table->integer('people_id');
          $table->foreign('issues_id')->references('id')->on('issues');
          $table->foreign('people_id')->references('id')->on('people');
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::dropIfExists('issueshaspeople');
  }
};
