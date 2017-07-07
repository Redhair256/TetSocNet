<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->char('username', 32);
            $table->char('email', 64);
            $table->boolean('gender');
            $table->char('about', 512);
            $table->integer('avatar_id');
            $table->timestamps('created_at');
            $table->timestamps('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_users');
    }
}
