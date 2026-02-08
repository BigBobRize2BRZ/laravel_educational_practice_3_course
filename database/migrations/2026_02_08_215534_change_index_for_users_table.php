<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
    Дополнительное Задание 9
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unique('email');
            $table->index('second_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropUnique(['email']);
            $table->dropIndex(['second_name']);
        });
    }
};
