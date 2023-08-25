<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Models\bill;
use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    public function add(Request $request){
        if ($request->isMethod('POST')){
//            dd($request->data_product);

            $product = json_decode($request->data_product);
            $user = Auth::user();
//            dd($user);
            $id = $product->id;
            $id_user = $user->id;
            $cart = cart::where('id_product', $id)->where('id_user',$id_user)->where('status',0)->first();

            if ($cart){
                $cart->amount_product += $request->amount;
                $cart->save();
            } else {
                $data = new cart;
                $data->id_product = $id;
                $data->id_user = $id_user;
                $data->price = $product->sale_price;
                $data->amount_product = $request->amount;
                $data->save();
            }
            return back();
        }
    }
    public function delete($id){
        cart::find($id)->delete();
        return redirect()->back();
    }
    public function viewCart(){
        $user = Auth::user();
        $product = DB::table('carts')->where('id_user',$user->id)->where('status',0)->get();
//        dd($product);
        return view('client.cart.cart', compact('product'));
    }
    public function checkout(CheckoutRequest $request){
        $user = Auth::user();
        $product = DB::table('carts')->where('id_user',$user->id)->where('status',0)->get();

        if ($request->isMethod('POST') && $request->btnSm){
            $data = new bill;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->id_user = $user->id;
            $data->payment_method = 'Thanh toán khi nhận hàng';
            $data->total = $request->total;
            $data->discount = isset(Session::get('coupon')->price) == true ? Session::get('coupon')->price : 0;
            $data->into_money = $request->into_money;
            $data->id_cart = json_encode($product);
            $data->save();
            $update_cart = cart::where('id_user',$user->id)->update(['status' => 1]);
            Session::forget('coupon');
            return redirect()->route('index')->with('success', 'Đặt hàng thành công');
        }
        return view('client.cart.checkout',compact('user', 'product'));
    }
    public function checkCoupon(Request $request){
        if ($request->isMethod('POST')){
            $coupon = DB::table('promotions')->where('code', $request->code)->first();
            if ($coupon != ''){
                Session::flash('success', 'Áp dụng thành công');
                Session::put('coupon', $coupon);
                return back();
            }else{
                Session::flash('error', 'Coupon không tồn tại');
                return back();
            }
        }
    }
    public function cliViewCart($id){
        $user = Auth::user();
        $bill = DB::table('bills')->where('id',$id)->first();
        $product = json_decode($bill->id_cart);

        return view('client.cart.view-cart',compact('bill', 'product'));
    }
    public function cancelOrder($id){
        $data = bill::find($id);
        $data->status = 'Đã hủy đơn';
        $data->save();
        Session::flash('success', 'Huỷ đơn hàng thành công');
        return back();
    }
}
