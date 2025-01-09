<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdProvince extends Model
{
    use HasFactory;

    protected $table = 'md_province';
    protected $primaryKey = 'md_province_id';
    public $timestamps = false;

    // public function bookings()
    // {
    //     return $this->hasMany(MdBooking::class, 'md_booking_provinceid', 'md_province_id');
    // }
}
