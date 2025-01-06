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
        Schema::create('md_tour_types', function (Blueprint $table) {
            $table->integer('md_tourtype_id')->primary();
            $table->string('md_tourtype_namethai', 255);
            $table->string('md_tourtype_nameeng', 255);
            $table->text('md_tourtype_remark');
            $table->integer('md_tourtype_status');
            $table->string('md_tourtype_masterkey', 25);
            $table->integer('md_tourtype_crebyid');
            $table->integer('md_tourtype_updatebyid');
            $table->dateTime('md_tourtype_credate');
            $table->dateTime('md_tourtype_updatedate');

            $table->engine = 'MyISAM';
            $table->charset = 'utf8mb3';
            $table->collation = 'utf8mb3_general_ci';
            $table->comment('ประเภททัว');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_tour_types');
    }
};
