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
        Schema::create('md_tours', function (Blueprint $table) {
            $table->increments('md_tour_id'); // Auto-increment primary key

            // Define columns with appropriate types and constraints
            $table->string('md_tour_code', 20)->comment('โค้ดทัว');
            $table->string('md_tour_picname', 255);
            $table->string('md_tour_namethai', 255);
            $table->string('md_tour_nameeng', 255);
            $table->text('md_tour_titlethai');
            $table->text('md_tour_titleeng');
            $table->unsignedInteger('md_tour_typeid', 100)->comment('ประเภทรถ');
            $table->integer('md_tour_companyid');
            $table->double('md_tour_star', 8, 2);
            $table->string('md_tour_facilityid', 255);
            $table->string('md_tour_transfer', 255);
            $table->integer('md_tour_priceadult')->comment('ราคาผู้ใหญ่');
            $table->integer('md_tour_pricechild')->comment('ราคาเด็ก');
            $table->integer('md_tour_saleadult');
            $table->integer('md_tour_salechild');
            $table->integer('md_tour_netadult');
            $table->integer('md_tour_netchild');
            $table->integer('md_tour_min');
            $table->integer('md_tour_vat');
            $table->text('md_tour_htmlfilenamethai');
            $table->text('md_tour_htmlfilenameeng');
            $table->integer('md_tour_amount')->comment('จำนวนคนต่อวัน');
            $table->integer('md_tour_day')->comment('วัน');
            $table->integer('md_tour_night')->comment('คืน');
            $table->text('md_tour_map')->comment('จุดรวมพล google map');
            $table->integer('md_tour_pickup');
            $table->time('md_tour_pickuptime');
            $table->string('md_tour_metatitle', 255);
            $table->string('md_tour_description', 255);
            $table->string('md_tour_keywords', 255);
            $table->integer('md_tour_count');
            $table->integer('md_tour_provid');
            $table->integer('md_tour_status');
            $table->integer('md_tour_recoment')->comment('แนะนำ');
            $table->string('md_tour_masterkey', 25);
            $table->integer('md_tour_crebyid');
            $table->integer('md_tour_updatebyid');

            // Use current timestamp for `credate` and `updatedate`
            $table->dateTime('md_tour_credate')->useCurrent();
            $table->dateTime('md_tour_updatedate')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('md_tours');
    }
};
