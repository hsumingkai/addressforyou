<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Add_vill_twd97;

class addressController extends Controller
{
    //
    public function __construct() {
    }


    public function index()
    {
        // return Add_vill_twd97::where('no',1)->first();
        return view('address.index');
    }
}

