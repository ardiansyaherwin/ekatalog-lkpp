<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DwonloadController extends Controller
{
    //
	public function download()
	{
		returnStorage::disk('local')->get('public/download/SPE - PT. ADILAWE APIN TAWA - BOGOR 1.pdf')
	}
}
