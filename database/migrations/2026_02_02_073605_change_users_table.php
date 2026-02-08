<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::dropIfExists('users');

        Schema::table('users1', function (Blueprint $table) {
            $table->string('email')->after('age')->comment('комментарий');
            $table->string('salary')->after('email')->default(0);
            $table->boolean('is_admin')->after('salary')->default(false);
            $table->string('name', 25)->first()->change();
            $table->char('sex')->after('id');
            // $table->dropColumn(['name', 'surname', 'birth_date']);
            $table->renameColumn('name', 'first_name');
            $table->renameColumn('surname', 'second_name');
        });

        Schema::rename('users1', 'users');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users1', function (Blueprint $table) {
            //
        });
    }
};
