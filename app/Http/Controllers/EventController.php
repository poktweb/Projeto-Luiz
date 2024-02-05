<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function contacts() {
        return view('contacts');
    }


    public function PLRs() {
        return view('PLRs');
    }

}


