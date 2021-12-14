<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;

class CreateUsersTable
{
    public function up()
    {
        Capsule::schema()->create('users', function ($table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }
}
