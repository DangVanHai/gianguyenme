<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\ProductModel;
use App\model\backend\CaloteryModel;
use Carbon\Carbon;
use DB;
class FronEndViewController extends Controller
{
	public function getBksensor(){
		$from = Carbon::today()->subMonth(2);
		$to = Carbon::tomorrow(); 
		 // $prods['_prods_new'] = ProductModel::orderby('prod_id','desc')->get();->inRandomOrder()
		$prods['_prods_new'] = ProductModel::whereBetween('created_at', array($from, $to))->get();
		$prods['_cate_new'] = CaloteryModel::where('cate_main','children')->orWhere('cate_main','parent')->inRandomOrder()->take(4)->get();

		// best sell with rating >= 4 star
		$data = DB::table('Product')
		->join('Calotery', 'Product.prod_cate', '=', 'Calotery.cate_id')
		->select('Product.*', 'Calotery.*');

		$cate= $data->where('prod_rate','>=',4)->orderby('prod_id','desc')->get()->toArray();

		$cate_star = array_unique(array_map(function ($i) { 
			return $i->cate_name; }, $cate));
		foreach ($cate as $value) {
			$b[] = $value->cate_name;
		}
		$prods['_cate_best'] = array_unique($b);
		$prods['_prod_best'] = $data->where('prod_rate','>=',4)->orderby('prod_id','desc')->get();
		//random
		$prods['_prod_random'] = ProductModel::orderby('prod_id','desc')->inRandomOrder()->get();
		$prods['count_random']= count($prods['_prod_random'])+3;
		return view('frontend.bksensor',$prods);
	}
	public function getProductDetail($id){
		$prods['_prods_det'] = ProductModel::find($id);
		foreach ($prods['_prods_det']->all() as $value) {
			$prods_cate = $value['prod_cate'];
		}
		$data = DB::table('Product')
		->join('Calotery', 'Product.prod_cate', '=', 'Calotery.cate_id')
		->select('Product.*', 'Calotery.*');
		$prods['_prods_relate'] = $data->where('prod_cate', $prods_cate)->inRandomOrder()->take(4)->get();
		return view('frontend.product',$prods);
	}
	public function getCateProduct($cate){
		$data = DB::table('Product')
		->join('Calotery', 'Product.prod_cate', '=', 'Calotery.cate_id')
		->select('Product.*', 'Calotery.*');
		$prods['_prods_cate'] = $data->where('prod_cate', $cate)->orderby(desc)->get();
		return view('frontend.product',$prods);
	}
}
