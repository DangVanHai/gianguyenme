<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\backend\ProductModel;
use App\model\backend\CaloteryModel;
use App\model\frontend\CommentModel;
use App\model\frontend\SubModel;
use App\Http\Requests\frontend\SubRequest;
use Carbon\Carbon;
use DB;
use Validator;
use Auth;
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
		$prods['_cate_best'] = array_unique($cate_star);
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
		$loc = CaloteryModel::find($cate);
		if($loc->cate_main == "parents"){
			$loc2 = CaloteryModel::where('cate_level', $cate)->get()->toArray();
			$loc3 = array_unique(array_map(function ($i) { 
				return $i['cate_id']; }, $loc2));
			$prods['_prods_cate'] = $data->whereIn('prod_cate', $loc3)->orderby('prod_id','desc')->paginate(9);
		}else{
			$prods['_prods_cate'] = $data->where('prod_cate', $cate)->orderby('prod_id','desc')->paginate(9);
		}
		return view('frontend.store',$prods);
	}
	public function getAdress(){
		
		return view('frontend.address');
	}

	public function getSearch(Request $request){
		$data = DB::table('Product')
		->join('Calotery', 'Product.prod_cate', '=', 'Calotery.cate_id')
		->select('Product.*', 'Calotery.*');

		$partner= $data->orderby('prod_partner_name','desc')->get()->toArray();

		$partner2 = array_unique(array_map(function ($i) { 
			return $i->prod_partner_name; }, $partner));

		foreach ($partner2 as $value) {
			if ($value != NULL) {
				$b[] = $value;
			}
		}
		$result['partners'] = array_unique($b);
		$search = $request->search;
		$result['keyword'] =$search;
		$search_rep =str_replace(' ', '%',$search);
		$search_cate = $request->cate;
		if ($search_cate == 0) {
			if($search_rep == NULL){
				$result['iterm1'] =$data->orderby('prod_id','desc')->paginate(12);
			}
			else{
				$result['iterm1'] = $data->Where('prod_name','like','%'.$search_rep.'%')->orWhere('prod_code','like','%'.$search_rep.'%')->orWhere('cate_name','like','%'.$search_rep.'%')->paginate(12);
			}
			return view('frontend.search',$result);
		}else{
			$loc['cate_name'] = CaloteryModel::find($search_cate);
			$loc2 = CaloteryModel::where('cate_level', $search_cate)->get()->toArray();
			$loc3 = array_unique(array_map(function ($i) { 
				return $i['cate_id']; }, $loc2));
			if($search_rep == NULL){
				$result['iterm2'] = $data->whereIn('prod_cate', $loc3)->paginate(12);
			}else{
				$result['iterm2'] = $data->whereIn('prod_cate', $loc3)->Where('prod_name','like','%'.$search_rep.'%')->orWhere('prod_code','like','%'.$search_rep.'%')->orWhere('cate_name','like','%'.$search_rep.'%')->paginate(12);
			}
			return view('frontend.search',$result,$loc);
		}
	}
	public function postSub(Request $request){
		$rules = [
			'post'=>'email|unique:subnews,email',
		];
		$messages = [
			'post.email'=>'phải đúng kiểu Email',
			'post.unique'=>'Email đã tồn tại',
		];
		$validator = Validator::make($request->all(), $rules, $messages);

		if ($validator->fails()) {
			return response()->json([
				'error' => true,
				'message' => $validator->errors()->all()
			], 200);
		} else{
			$sub = new SubModel;
			$sub->email = $request->post;
			$sub->save();
			return response()->json(['success'=>'Bạn đã đăng ký thành công , chúng tôi sẽ gửi tin tức qua email của bạn'],200);
		}
	}
	public function getCheckout(Request $request){
		
		return view('frontend.checkout');
	}
	public function getLaw(Request $request){
		
		return view('frontend.law');
	}
}
