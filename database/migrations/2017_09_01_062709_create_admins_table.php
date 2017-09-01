<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('avatar')->comment('图像')->nullable();
            $table->string('password');
            $table->string('last_ip')->unique();
            $table->unsignedInteger('evel_id')->default(0)->comment('等级');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('comment')->nullable();
            $table->string('remember_token')->nullable();
            $table->unsignedInteger('created_at');
            $table->unsignedInteger('updated_at'); 
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
