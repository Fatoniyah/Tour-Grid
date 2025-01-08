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

        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:100',
            'tel' => 'required|string|max:20',
            'md_tour_id' => 'required|integer|exists:md_tour,md_tour_id',
            
        ]);


        $booking = new MdBooking();
        $booking->md_booking_code = rand(100000, 999999);
        $booking->md_booking_groupcode = '';
        $booking->md_booking_companyid = 1;
        $booking->md_booking_paymentid = 'default_payment';
        $booking->md_booking_provinceid = 1;
        $booking->md_booking_tourid = $request->md_tour_id;
        $booking->md_booking_prefix = 1;
        $booking->md_booking_fname = $request->fname;
        $booking->md_booking_lname = $request->lname;
        $booking->md_booking_tel = $request->tel;
        $booking->md_booking_country = 'Thailand';
        $booking->md_booking_countrycode = 'TH';
        $booking->md_booking_pickup = 'No pickup';
        $booking->md_booking_pickuptime = '12:00:00';
        $booking->md_booking_email = $request->email;
        $booking->md_booking_price = 0;
        $booking->md_booking_total = 0;
        $booking->md_booking_vat = 0;
        $booking->md_booking_paypal = 0;
        $booking->md_booking_refund = '';
        $booking->md_booking_refundprice = 0;
        $booking->md_booking_currency = 'THB';
        $booking->md_booking_adult = 1;
        $booking->md_booking_child = 0;
        $booking->md_booking_infant = 0;
        $booking->md_booking_day = date('l');
        $booking->md_booking_month = date('F');
        $booking->md_booking_year = date('Y');
        $booking->md_booking_time = date('H:i:s');
        $booking->md_booking_date = now();
        $booking->md_booking_departdate = now();
        $booking->md_booking_remark = '';
        $booking->md_booking_ip = $request->ip();
        $booking->md_booking_read = 0;
        $booking->md_booking_lang = 'th';
        $booking->md_booking_from = 1;
        $booking->md_booking_reminder = 0;
        $booking->md_booking_sent = 0;
        $booking->md_booking_alert = 0;
        $booking->md_booking_slip = '';
        $booking->md_booking_refno = 0;
        $booking->md_booking_statuspayment = 0;
        $booking->md_booking_status = 0;
        $booking->md_booking_typepayment = 'credit_card';
        $booking->md_booking_crebyid = 1;
        $booking->md_booking_credate = now();
        $booking->md_booking_updatebyid = 1;
        $booking->md_booking_updatedate = now();


        $booking->save();


        return redirect()->route('success')->with('success', 'การจองของคุณสำเร็จ');
    }

    public function success(){
        return view('success');
    }

}
