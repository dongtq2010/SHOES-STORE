<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissonRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisson_role', function (Blueprint $table) {
            $table->bigIncrements('id',11);
            $table->unsignedBigInteger('role_id',11);
            $table->unsignedBigInteger('permission_id',11);
            $table->foreign('role_id')->references('roles')->on('id')->onDelete('cascade');
            $table->foreign('permission_id')->references('permissions')->on('id')->onDelete('cascade');
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
        Schema::dropIfExists('permisson_role');
    }
}
