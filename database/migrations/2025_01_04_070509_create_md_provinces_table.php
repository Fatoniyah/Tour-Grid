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
        Schema::create('md_provinces', function (Blueprint $table) {
            $table->increments('md_province_id');
            $table->string('md_province_picname');
            $table->string('md_province_namethai', 100);
            $table->string('md_province_nameeng', 100);
            $table->string('md_province_remark', 100);
            $table->integer('md_province_status', );
            $table->string('md_province_masterkey', 100);
            $table->integer('md_province_crebyid', );
            $table->integer('md_province_updatebyid', );
            $table->datetime('md_province_credate');
            $table->datetime('md_province_updatedate');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_provinces');
    }
};
