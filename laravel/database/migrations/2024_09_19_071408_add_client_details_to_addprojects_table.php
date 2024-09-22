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
        Schema::table('addprojects', function (Blueprint $table) {
            $table->string('client_name');
            $table->string('client_logo');
            $table->string('client_url');
            $table->text('project_summary');
        });
    }
    
    public function down()
    {
        Schema::table('addprojects', function (Blueprint $table) {
            $table->dropColumn(['client_name', 'client_logo', 'client_url', 'project_summary']);
        });
    }
    
};
