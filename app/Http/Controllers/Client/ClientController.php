<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\image_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $user_check = Auth::check();
//        dd(DB::table('products')->where('id', 1)->first());
        //data_product
        $data_new_arrivals = DB::table('products')
            ->select('id', 'id_brands', 'name', 'amount', 'image','old_price', 'sale_price')
            ->limit(8)->orderBy('updated_at','desc')->get();
        $data_best_sellers = DB::table('products')
            ->select('id', 'id_brands', 'name','amount', 'image','old_price', 'sale_price')
            ->inRandomOrder()->limit(5)->orderBy('id', 'desc')->get();
        $data_random_3_1 = DB::table('products')
            ->select('id', 'id_brands', 'name','amount', 'image','old_price', 'sale_price')
            ->inRandomOrder()->limit(3)->orderBy('id', 'desc')->get();
        $data_random_3_2 = DB::table('products')
            ->select('id', 'id_brands', 'name','amount', 'image','old_price', 'sale_price')
            ->inRandomOrder()->limit(3)->orderBy('id', 'desc')->get();
        $data_daily_deal = DB::table('products')
            ->select('id', 'id_brands', 'name','amount', 'image','old_price', 'sale_price')
            ->inRandomOrder()->limit(3)->orderBy('id', 'desc')->get();

        //data_branđ
        $data_brand = DB::table('brands')->inRandomOrder()->limit(5)->get();

        //banner
        $data_banner = DB::table('banners')->get();
//        dd($data_banner);

//        dd($data_new_arrivals);
        return view('client.home', compact('data_new_arrivals', 'data_best_sellers',
            'data_random_3_1', 'data_random_3_2', 'data_daily_deal', 'data_brand', 'user_check','data_banner'));
    }
    public function page_404(){
        return view('client.404');
    }
    public function blog_page(){
        return view('client.blog');
    }
    public function contact_page(){
        return view('client.contact');
    }
}
