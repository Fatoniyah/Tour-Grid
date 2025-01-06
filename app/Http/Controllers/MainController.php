<?php

namespace App\Http\Controllers;

use App\Models\MdTour;

class MainController extends Controller
{
    public function index()
    {
        $md_tour = MdTour::paginate(6);
        return view("welcome", compact("md_tour"));
    }

    public function detail()
    {

        return view("detail");

    }

    public function tap()
    {
        return view("tap");
    }
}
