<?php

namespace App\Http\Controllers;

use App\Models\MdBooking;
use App\Models\MdTour;
use Illuminate\Http\Request;

class MdBookingController extends Controller
{

    public function booking($md_tour_id)
    {
        $md_tours = MdTour::findOrFail($md_tour_id);
        return view('booking', compact('md_tours'));
    }

    public function store(Request $request)
    {
        // การตรวจสอบข้อมูลจากฟอร์ม
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:100',
            'tel' => 'required|string|max:20',
            'md_tour_id' => 'required|integer|exists:md_tour,md_tour_id',
        ]);

        // สร้างการจองใหม่
        $booking = new MdBooking();
        $booking->md_booking_code = rand(100000, 999999); // สร้างรหัสการจอง
        $booking->md_booking_groupcode = ''; // ตั้งค่าว่าง
        $booking->md_booking_companyid = 1; // ค่าเริ่มต้น
        $booking->md_booking_paymentid = 'default_payment'; // ค่าเริ่มต้น
        $booking->md_booking_provinceid = 1; // ค่าเริ่มต้น
        $booking->md_booking_tourid = $request->md_tour_id; // ไอดีทริป
        $booking->md_booking_prefix = 1; // ค่าเริ่มต้น
        $booking->md_booking_fname = $request->fname;
        $booking->md_booking_lname = $request->lname;
        $booking->md_booking_tel = $request->tel;
        $booking->md_booking_country = 'Thailand'; // ค่าเริ่มต้น
        $booking->md_booking_countrycode = 'TH'; // ค่าเริ่มต้น
        $booking->md_booking_pickup = 'No pickup'; // ค่าเริ่มต้น
        $booking->md_booking_pickuptime = '12:00:00'; // ค่าเริ่มต้น
        $booking->md_booking_email = $request->email;
        $booking->md_booking_price = 0; // ค่าเริ่มต้น
        $booking->md_booking_total = 0; // ค่าเริ่มต้น
        $booking->md_booking_vat = 0; // ค่าเริ่มต้น
        $booking->md_booking_paypal = 0; // ค่าเริ่มต้น
        $booking->md_booking_refund = ''; // ค่าเริ่มต้น
        $booking->md_booking_refundprice = 0; // ค่าเริ่มต้น
        $booking->md_booking_currency = 'THB'; // ค่าเริ่มต้น
        $booking->md_booking_adult = 1; // ค่าเริ่มต้น
        $booking->md_booking_child = 0; // ค่าเริ่มต้น
        $booking->md_booking_infant = 0; // ค่าเริ่มต้น
        $booking->md_booking_day = date('l'); // วันที่จอง
        $booking->md_booking_month = date('F'); // เดือนที่จอง
        $booking->md_booking_year = date('Y'); // ปีที่จอง
        $booking->md_booking_time = date('H:i:s'); // เวลาที่จอง
        $booking->md_booking_date = now(); // วันที่จอง
        $booking->md_booking_departdate = now(); // วันที่เดินทาง
        $booking->md_booking_remark = ''; // ค่าเริ่มต้น
        $booking->md_booking_ip = $request->ip(); // IP ของผู้จอง
        $booking->md_booking_read = 0; // ค่าเริ่มต้น
        $booking->md_booking_lang = 'th'; // ค่าเริ่มต้น
        $booking->md_booking_from = 1; // ค่าเริ่มต้น
        $booking->md_booking_reminder = 0; // ค่าเริ่มต้น
        $booking->md_booking_sent = 0; // ค่าเริ่มต้น
        $booking->md_booking_alert = 0; // ค่าเริ่มต้น
        $booking->md_booking_slip = ''; // ค่าเริ่มต้น
        $booking->md_booking_refno = 0; // ค่าเริ่มต้น
        $booking->md_booking_statuspayment = 0; // สถานะการจ่ายเงิน
        $booking->md_booking_status = 0; // สถานะการจอง
        $booking->md_booking_typepayment = 'credit_card'; // ประเภทการชำระเงิน
        $booking->md_booking_crebyid = 1; // ค่าเริ่มต้น
        $booking->md_booking_credate = now(); // วันที่สร้าง
        $booking->md_booking_updatebyid = 1; // ค่าเริ่มต้น
        $booking->md_booking_updatedate = now(); // วันที่อัปเดต

        // บันทึกการจอง
        $booking->save();

        // แสดงผลหรือทำการ redirect ไปที่หน้าอื่น
        // return redirect()->route('booking.form')->with('success', 'การจองของคุณสำเร็จ');
    }

}
