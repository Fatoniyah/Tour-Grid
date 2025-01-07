<?php

namespace App\Http\Controllers;

use App\Models\MdTour;

class MainController extends Controller
{
    public function index()
{
    $md_tour = MdTour::with('tourType')->paginate(6);
    return view('welcome', compact('md_tour'));
}

    public function detail($md_tour_id)
    {
        $md_tour = MdTour::findOrFail($md_tour_id);
        return view("detail", compact("md_tour"));
    }

    public function booking($md_tour_id)
    {
        $md_tour = MdTour::findOrFail($md_tour_id);
        return view("booking", compact("md_tour"));
    }

}
