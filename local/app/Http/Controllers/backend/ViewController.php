<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function getDashboard(){
    	return view('backend.index');
    }
    public function getUserEmployees(){
    	return view('backend.users');
    }
    public function getUserInfo(){
    	return view('backend.info-user');
    }
    public function getAddUser(){
    	return view('backend.add-user');
    }
    public function postAddUser(){
    	return back();
    }
    public function getUserGuest(){
    	return view('backend.guest');
    }
    public function getShowProduct(){
    	return view('backend.show-product');
    }
    public function getAddProduct(){
    	return view('backend.add-product');
    }
}
