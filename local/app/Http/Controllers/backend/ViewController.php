<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\UserModel;
use App\Http\Requests\backend\AddUserRequest;
use Illuminate\Support\Facades\Hash;
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
	public function postAddUser(AddUserRequest $request){
		$user = new UserModel;
		$user->full_name = $request->full_name;
		$user->username = $request->username;
		$user->email = $request->email;
		$user->password =Hash::make($request->password);
		$user->level = $request->level;
		$user->phone = $request->phone;
		$user->address1 = $request->address;
		$user->id_card = $request->id_card;
		$user->avatar = $request->avatar;
		$user->employee_detail = $request->employee_detail;
		$user->save();
		dd('thanh cong');
		return redirect()->intended('');
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
