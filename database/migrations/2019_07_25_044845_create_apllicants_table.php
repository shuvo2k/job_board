<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApllicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apllicants', function (Blueprint $table) {
          $table->increments('id');
          $table->string('first_name', 60);
          $table->string('last_name', 60);
          $table->string('email', 60)->unique();
          $table->string('image')->nullable();
          $table->string('resume')->nullable();
          $table->string('skills')->nullable();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->rememberToken();
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
        Schema::dropIfExists('apllicants');
    }
}
