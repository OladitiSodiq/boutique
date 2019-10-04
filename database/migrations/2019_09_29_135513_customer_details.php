<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CustomerDetails extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    //
    if (!Schema::hasTable('customer_details')) {
      Schema::create('customer_details', function (Blueprint $table) {
        $table->increments('id');
        $table->string('firstname')->nullable();
        $table->string('lastname')->nullable();
        $table->string('surname')->nullable();
        $table->string('username')->nullable();
        $table->string('email')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->string('provider');
        $table->string('prorovider_id');
        $table->string('password')->nullable();
        $table->string('address')->nullable();
        $table->string('state')->nullable();
        $table->string('country')->nullable();
        $table->string('phone')->nullable();
        $table->string('age')->nullable();
        $table->string('role')->nullable();
        $table->string('image')->nullable();
        $table->rememberToken();
        $table->timestamps();
      });
    }
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
}
