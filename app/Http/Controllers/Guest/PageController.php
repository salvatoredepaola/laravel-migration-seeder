<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $trains = trains::all();

        return view('welcome', compact('trains'));
    }

    public function other() {

        // $trains = trains::all();

        return view('welcome', compact('trains'));
    }
}
