<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
<<<<<<< HEAD:database/migrations/2014_10_12_000000_create_users_table.php
<<<<<<< HEAD:database/migrations/2020_11_22_042053_create_users_table.php
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->unsignedBigInteger('role_id');
            $table->string('email',255)->unique();
            $table->string('password',32);
            $table->foreign('role_id')->references('id')->on('roles')->onUpdate('RESTRICT')->onDelete('CASCADE');
=======
=======
>>>>>>> 0a4c95bc68c53fa07b49034bf6f235013cc5960a:database/migrations/2014_10_12_000000_create_users_table.php
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
<<<<<<< HEAD:database/migrations/2014_10_12_000000_create_users_table.php
>>>>>>> 0a4c95bc68c53fa07b49034bf6f235013cc5960a:database/migrations/2014_10_12_000000_create_users_table.php
=======
>>>>>>> 0a4c95bc68c53fa07b49034bf6f235013cc5960a:database/migrations/2014_10_12_000000_create_users_table.php
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
        Schema::dropIfExists('users');
    }
}
