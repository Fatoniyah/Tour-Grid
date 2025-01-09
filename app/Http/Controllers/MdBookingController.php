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
        // $sys_countries = $md_tours->countries;

        return view('booking', compact('md_tours'));
    }

    public function store(Request $request)
    {
        // dd( $md_tour );
        $md_tour = MdTour::findOrFail($request->md_tour_id);
        // $sys_countries = SysCountries::findOrFail($request->sys_countries_id);

        // $sys_countries = $md_tour->countries;

        // dd($md_tour);
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|max:100',
            'tel' => 'required|string|max:20',
            'prefix' => 'required|integer',
            'md_tour_id' => 'required|integer|exists:md_tour,md_tour_id',

        ]);

        $booking = new MdBooking();
        $booking->md_booking_code = $md_tour->md_tour_code;
        $booking->md_booking_groupcode = '';
        $booking->md_booking_companyid = $md_tour->md_tour_companyid;
        $booking->md_booking_paymentid = '1';
        $booking->md_booking_provinceid = $md_tour->md_tour_provid;
        $booking->md_booking_tourid = $request->md_tour_id;
        $booking->md_booking_prefix = $request->prefix;
        $booking->md_booking_fname = $request->fname;
        $booking->md_booking_lname = $request->lname;
        $booking->md_booking_tel = $request->tel;
        $booking->md_booking_country = $md_tour->countries->sys_countries_name ?? 'ไม่มี id ประเทศ';
        $booking->md_booking_countrycode = $md_tour->countries->sys_countries_code ?? 'ไม่มี code ประเทศ';
        $booking->md_booking_pickup = $md_tour->md_tour_pickup;
        $booking->md_booking_pickuptime = $md_tour->md_tour_pickuptime;
        $booking->md_booking_email = $request->email;
        $booking->md_booking_price = $md_tour->md_tour_netadult;
        $booking->md_booking_total = 0;
        $booking->md_booking_vat = $md_tour->md_tour_vat;
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
        $booking->md_booking_status = $md_tour->md_tour_status;
        $booking->md_booking_typepayment = 'credit_card';
        $booking->md_booking_crebyid = $md_tour->md_tour_crebyid;
        $booking->md_booking_credate = now();
        $booking->md_booking_updatebyid = 1;
        $booking->md_booking_updatedate = now();

        $booking->save();

        dd($booking);

        return redirect()->route('success')->with('success', 'การจองของคุณสำเร็จ');
    }

    public function success()
    {
        return view('success');
    }

}
