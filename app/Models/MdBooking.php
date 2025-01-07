<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdBooking extends Model
{
    use HasFactory;

    protected $table = 'md_booking';
    protected $primaryKey = 'md_booking_id';
    public $timestamps = false;

    public function province()
    {
        return $this->belongsTo(MdProvince::class, 'md_booking_provinceid', 'md_province_id');
    }

    public function tour()
    {
        return $this->belongsTo(MdTour::class, 'md_booking_tourid', 'md_tour_id');
    }
}
