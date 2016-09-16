<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class DealsFrontEnd extends Controller
{
    public function index()
    {
    	$dealsDB        = DB::table('deals')->get();
		$title          = 'Haka Lodge Deals';

		$data['header'] = view('partials/dealsheader')->with('title', $title);
    	$data['footer'] = view('partials/dealsfooter');

    	return view('front.deals', $data, compact('dealsDB'));
    }
}
