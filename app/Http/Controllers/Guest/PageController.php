<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{   
    public function index() {

        $myDate = date('d-m-Y');
        //dd($myDate);
        $trains = Train::where('created_at',  date('d-m-Y'))->get();

        dd($trains);
        return view('home', compact('trains'));

    }
}
