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
        Schema::create('sys_countries', function (Blueprint $table) {
            $table->integer('sys_countries_id')->primary();
            $table->string('sys_countries_code', 3);
            $table->string('sys_countries_name', 150);
            $table->string('sys_countries_telephone', 20);
            $table->text('sys_countries_remark');
            $table->integer('sys_countries_status')->comment('สถานะ');
            $table->integer('sys_countries_crebyid');
            $table->dateTime('sys_countries_credate')->nullable();
            $table->integer('sys_countries_updatebyid');
            $table->dateTime('sys_countries_updatedate')->nullable();

            $table->engine = 'MyISAM';
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8mb3_general_ci';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sys_countries');
    }
};
