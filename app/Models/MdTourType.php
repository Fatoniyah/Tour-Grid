<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdTourType extends Model
{
    protected $table = 'md_tour_types'; // ชื่อตาราง
    protected $primaryKey = 'md_tourtype_id'; // คีย์หลัก

    public $timestamps = false; // หากไม่มี created_at และ updated_at

    protected $fillable = [
        'md_tourtype_namethai',
        'md_tourtype_nameeng',
        'md_tourtype_remark',
        'md_tourtype_status',
        'md_tourtype_masterkey',
        'md_tourtype_crebyid',
        'md_tourtype_updatebyid',
        'md_tourtype_credate',
        'md_tourtype_updatedate',
    ];

    public function tours()
    {
        return $this->hasMany(MdTour::class, 'md_tour_typeid', 'md_tourtype_id');
    }
}
