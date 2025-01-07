<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MDProvince extends Model
{
    use HasFactory;

    // กำหนดชื่อของตาราง
    protected $table = 'md_province';

    // กำหนด Primary Key
    protected $primaryKey = 'md_province_id';

    // ปิดการใช้ timestamps ของ Laravel (created_at และ updated_at)
    public $timestamps = false;

    // กำหนด fillable fields
    protected $fillable = [
        'md_province_picname',
        'md_province_namethai',
        'md_province_nameeng',
        'md_province_remark',
        'md_province_status',
        'md_province_masterkey',
        'md_province_crebyid',
        'md_province_updatebyid',
        'md_province_credate',
        'md_province_updatedate',
    ];

    // สร้างความสัมพันธ์กับ Tour
    public function tours()
    {
        return $this->hasMany(MdTour::class, 'md_tour_provid', 'md_province_id');
    }

    public function bookings()
{
    return $this->hasMany(MdBooking::class, 'md_booking_provinceid', 'md_province_id');
}
}
