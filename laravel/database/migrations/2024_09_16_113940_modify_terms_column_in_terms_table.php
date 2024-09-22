<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('terms', function (Blueprint $table) {
            // Change the 'terms' column to LONGTEXT
            $table->longText('terms')->change();
        });
    }

    public function down()
    {
        Schema::table('terms', function (Blueprint $table) {
            // Optionally, revert the 'terms' column back to its previous type (e.g., string or text)
            $table->string('terms', 255)->change(); // You can modify this to the previous type
        });
    }
};
