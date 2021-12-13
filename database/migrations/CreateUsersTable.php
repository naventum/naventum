<?php

namespace Database\Migrations;

use Illuminate\Database\Capsule\Manager as Capsule;
use Naventum\Framework\Illuminate\Database\Connection;

class CreateUsersTable extends Connection
{
    public function up()
    {
        $this->___conn();

        Capsule::schema()->create('users', function ($table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }
}
