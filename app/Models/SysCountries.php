<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SysCountries extends Model
{
    use HasFactory;

    // กำหนดชื่อของตาราง
    protected $table = 'sys_countries';

    // กำหนด Primary Key
    protected $primaryKey = 'sys_countries_id';

    // ปิดการใช้ timestamps ของ Laravel
    public $timestamps = false;

    // กำหนด fillable fields
    protected $fillable = [
        'sys_countries_code',
        'sys_countries_name',
        'sys_countries_telephone',
        'sys_countries_remark',
        'sys_countries_status',
        'sys_countries_crebyid',
        'sys_countries_credate',
        'sys_countries_updatebyid',
        'sys_countries_updatedate',
    ];

    // สร้างความสัมพันธ์กับ Tour
    public function tours()
    {
        return $this->hasMany(MdTour::class, 'md_tour_countryid', 'sys_countries_id');
    }
}

