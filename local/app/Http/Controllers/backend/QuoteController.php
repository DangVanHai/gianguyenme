<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuoteController extends Controller
{
    public function getQuote(){
    	return view ('backend.DinamicallyRow');
    }
}
