<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\CaloteryModel;
use App\Http\Requests\backend\CategoryRequest;

class CategoryController extends Controller
{
	public function getAddCategory(){
		$cate['categories'] = CaloteryModel::Where('cate_main','parents')->orderby('cate_id','desc')->get();
		return view('backend.add-category',$cate);
	}
	public function postAddCategory(CategoryRequest $request){
		$cate = new CaloteryModel;
		$cate->cate_name = $request->cate_name;
		$cate->cate_main = $request->cate_main;
		$cate->cate_level = $request->cate_level;
		$cate->save();
		dd('thanhcong');
		return redirect()->intended('admin/categories/show');
	}
}
