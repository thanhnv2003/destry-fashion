<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductCliController extends Controller
{
    //
    public function detail($id){
        $user_check =  Auth::check();
        $data_product = DB::table('products')->select('id', 'name', 'image','amount', 'old_price', 'sale_price', 'description')->where('id', '=', $id)->first();
        $data_like = DB::table('products')->select('id', 'id_brands','amount', 'name', 'image','old_price', 'sale_price')->inRandomOrder()->limit(5)->orderBy('id', 'desc')->get();

//        dd(json_decode($data_like[0]->image));
        return view('client.product.detail', compact('data_product', 'data_like', 'user_check'));
    }
    public function shop(){
        $user_check =  Auth::check();
        $perPage = 12;
        $data = products::paginate($perPage);
//        dd($data->total());
        $data_categories = categories::all();
        $data_recent = DB::table('products')
            ->select('id', 'id_brands', 'name','amount', 'image','old_price', 'sale_price')
            ->inRandomOrder()->limit(3)->orderBy('id', 'desc')->get();
//        dd($data_categories);
        return view('client.product.shop', compact('data', 'data_categories', 'data_recent',
        'user_check'));
    }
}
