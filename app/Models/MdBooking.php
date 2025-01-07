<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MdBooking extends Model
{
    use HasFactory;

    // กำหนดชื่อของตาราง
    protected $table = 'md_booking';

    // กำหนด Primary Key
    protected $primaryKey = 'md_booking_id';

    // ปิดการใช้ timestamps ของ Laravel
    public $timestamps = false;

    // กำหนด fillable fields
    protected $fillable = [
        'md_booking_code',
        'md_booking_groupcode',
        'md_booking_companyid',
        'md_booking_paymentid',
        'md_booking_provinceid',
        'md_booking_tourid',
        'md_booking_prefix',
        'md_booking_fname',
        'md_booking_lname',
        'md_booking_tel',
        'md_booking_country',
        'md_booking_countrycode',
        'md_booking_pickup',
        'md_booking_pickuptime',
        'md_booking_email',
        'md_booking_price',
        'md_booking_total',
        'md_booking_vat',
        'md_booking_paypal',
        'md_booking_refund',
        'md_booking_refundprice',
        'md_booking_currency',
        'md_booking_adult',
        'md_booking_child',
        'md_booking_infant',
        'md_booking_day',
        'md_booking_month',
        'md_booking_year',
        'md_booking_time',
        'md_booking_date',
        'md_booking_departdate',
        'md_booking_remark',
        'md_booking_ip',
        'md_booking_read',
        'md_booking_lang',
        'md_booking_from',
        'md_booking_reminder',
        'md_booking_sent',
        'md_booking_alert',
        'md_booking_slip',
        'md_booking_refno',
        'md_booking_statuspayment',
        'md_booking_status',
        'md_booking_typepayment',
        'md_booking_crebyid',
        'md_booking_credate',
        'md_booking_updatebyid',
        'md_booking_updatedate',
    ];

    // สร้างความสัมพันธ์กับ Tour
    public function tour()
    {
        return $this->belongsTo(MdTour::class, 'md_booking_tourid', 'md_tour_id');
    }

    // สร้างความสัมพันธ์กับ Province
    public function province()
    {
        return $this->belongsTo(MdProvince::class, 'md_booking_provinceid', 'md_province_id');
    }
}
