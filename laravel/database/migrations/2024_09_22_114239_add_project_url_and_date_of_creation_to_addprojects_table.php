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
        Schema::table('addprojects', function (Blueprint $table) {
            $table->string('project_url');
            $table->string('date_of_creation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addproject', function (Blueprint $table) {
            $table->dropColumn(['project_url', 'date_of_creation']);
        });
    }
};
