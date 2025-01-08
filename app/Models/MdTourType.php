<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdTourType extends Model
{
    use HasFactory;

    protected $table = 'md_tourtype';
    protected $primaryKey = 'md_tourtype_id';
    public $timestamps = false;

    public function tours()
    {
        return $this->hasMany(MdTour::class, 'md_tour_typeid', 'md_tourtype_id');
    }
}
