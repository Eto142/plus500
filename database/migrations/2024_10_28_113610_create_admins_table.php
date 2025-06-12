<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id(); // bigint(20) UNSIGNED AUTO_INCREMENT
            $table->string('name'); // varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
            $table->string('admin_type'); // varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
            $table->string('email')->nullable();  // varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
            $table->string('password'); // varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
            $table->timestamps(); // created_at and updated_at timestamp NULL DEFAULT NULL
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
