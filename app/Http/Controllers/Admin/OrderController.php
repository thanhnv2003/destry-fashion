<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\bill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function list(){
        $perPage = 5;
        $data = bill::paginate($perPage);
        return view('admin.order.list', compact('data'));
    }
    public function edit(Request $request,$id){
        $title = 'Edit Order: '.$id;
        if ($request->post()){
            $data = bill::find($id);
            $data->status = $request->status;
            $data->save();
            return redirect()->route('order.list')->with('success','Cập nhật thành công');
        }
        $value = DB::table('bills')->where('id', $id)->get();
        return view('admin.order.edit', compact('title', 'value'));
    }
    public function delete($id){
        bill::find($id)->delete();
        return redirect()->route('order.list')->with('success','Đã xóa thành công!');
    }
    public function detail($id){
        $bill = DB::table('bills')->where('id',$id)->first();
        $product = json_decode($bill->id_cart);
        return view('admin.order.detail',compact('product', 'bill'));
    }
}
