<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MdTour extends Model
{
    protected $table = 'md_tours'; // ชื่อตาราง
    protected $primaryKey = 'md_tour_id'; // คีย์หลัก

    public $timestamps = false; // หากไม่มี created_at และ updated_at

    protected $fillable = [
        'md_tour_code',
        'md_tour_picname',
        'md_tour_namethai',
        'md_tour_nameeng',
        'md_tour_titlethai',
        'md_tour_titleeng',
        'md_tour_typeid',
        'md_tour_companyid',
        'md_tour_star',
        'md_tour_facilityid',
        'md_tour_transfer',
        'md_tour_priceadult',
        'md_tour_pricechild',
        'md_tour_saleadult',
        'md_tour_salechild',
        'md_tour_netadult',
        'md_tour_netchild',
        'md_tour_min',
        'md_tour_vat',
        'md_tour_htmlfilenamethai',
        'md_tour_htmlfilenameeng',
        'md_tour_amount',
        'md_tour_day',
        'md_tour_night',
        'md_tour_map',
        'md_tour_pickup',
        'md_tour_pickuptime',
        'md_tour_metatitle',
        'md_tour_description',
        'md_tour_keywords',
        'md_tour_count',
        'md_tour_provid',
        'md_tour_status',
        'md_tour_recoment',
        'md_tour_masterkey',
        'md_tour_crebyid',
        'md_tour_updatebyid',
        'md_tour_credate',
        'md_tour_updatedate',
    ];

    public function tourType()
    {
        return $this->belongsTo(MdTourType::class, 'md_tour_typeid', 'md_tourtype_id');
    }

    public function province()
    {
        return $this->belongsTo(MdProvince::class, 'md_tour_provid', 'md_province_id');
    }

    public function country()
    {
        return $this->belongsTo(SysCountries::class, 'md_tour_countryid', 'sys_countries_id');
    }

    public function bookings()
    {
        return $this->hasMany(MdBooking::class, 'md_booking_tourid', 'md_tour_id');
    }

}
