<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FronEndViewController extends Controller
{
    public function getBksensor(){
    	return view('frontend.bksensor');
    }
}
