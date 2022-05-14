<?php

namespace Database\Migrations;

use Naventum\Framework\Illuminate\Support\Facades\Schema;

class CreateUsersTable
{
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
