<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdTour extends Model
{
    use HasFactory;

    protected $table = 'md_tour';
    protected $primaryKey = 'md_tour_id';
    public $timestamps = false;

    public function tourType()
    {
        return $this->belongsTo(MdTourType::class, 'md_tour_typeid', 'md_tourtype_id');
    }

    public function province()
    {
        return $this->belongsTo(MdProvince::class, 'md_tour_provid', 'md_province_id');
    }

    public function bookings()
    {
        return $this->hasMany(MdBooking::class, 'md_booking_tourid', 'md_tour_id');
    }
    public function countries()
    {
        return $this->belongsTo(SysCountries::class, 'md_tour_count', 'sys_countries_id');
    }

}
