<?php

namespace App\Http\Controllers;

use App\Models\MdBooking;
use App\Models\MdTour;
use Illuminate\Http\Request;

class MdBookingController extends Controller
{

    // public function index()
    // {
    //     $bookings = MdBooking::all();
    //     return response()->json($bookings);
    // }

    public function booking($md_tour_id)
    {
        $md_tour = MdTour::findOrFail($md_tour_id);
        return view("booking", compact("md_tour"));
    }

    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $request->validate([
            'md_booking_prefix' => 'required|string|max:10',
            'md_booking_fname' => 'required|string|max:255',
            'md_booking_lname' => 'required|string|max:255',
            'dob' => 'required|date',
            'passport' => 'required|string|max:50',
            'md_booking_tel' => 'required|string|max:20',
            'md_booking_email' => 'required|email|max:100',
        ]);

        $booking = new MdBooking();
        $booking->md_booking_prefix = $validatedData['md_booking_prefix'];
        $booking->md_booking_fname = $validatedData['md_booking_fname'];
        $booking->md_booking_lname = $validatedData['md_booking_lname'];
        $booking->md_booking_tel = $validatedData['md_booking_tel'];
        $booking->md_booking_email = $validatedData['md_booking_email'];


        $booking->md_booking_remark = json_encode([
            'dob' => $validatedData['dob'],
            'passport' => $validatedData['passport'],
        ]);

        $booking->md_booking_code = 'BKG' . time();
        $booking->md_booking_groupcode = 'GRP' . time();
        $booking->md_booking_provinceid = 1;
        $booking->md_booking_companyid = 1;
        $booking->md_booking_date = now();


        $booking->save();

        return redirect()->back()->with('success', 'Booking created successfully!');
    }

}
