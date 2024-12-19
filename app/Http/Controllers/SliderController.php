<?php

namespace App\Http\Controllers;
use App\Models\Slider;

use Illuminate\Http\Request;

class SliderController extends Controller
{



    public function index()
    {
        $sliders = Slider::all();

        return view('pages.home', compact('sliders'));
    }

}
