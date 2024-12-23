<?php

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('layout.app');
    }
}

?>