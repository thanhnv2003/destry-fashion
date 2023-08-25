<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PromotionsRequest;
use App\Models\promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PromotionsController extends Controller
{
    //
    public function list(){
//        for ($i = 0; $i < 10; $i++){
//            $data = new promotion;
//            $data->name = 'Nguyen Van Thanh';
//            $data->code = '1234';
//            $data->price = 100000;
//            $data->save();
//        }
//        die();
        $perPage = 5;
        $data = promotion::paginate($perPage);
        return view('admin.promotion.list', compact('data'));
    }
    public function add(PromotionsRequest $request){
        $title = "Add Promotion";
        if ($request->post()){
            $data = new promotion;
            $data->name = $request->name;
            $data->code = $request->code;
            $data->price = $request->price;
            $data->save();
            return redirect()->route('promo.list')->with('success','Thêm mới thành công');
        }
        return view('admin.promotion.add', compact('title'));
    }

    public function edit(PromotionsRequest $request, $id){
        $title = 'Edit Promotion: '.$id;
        if ($request->post()){
            $data = promotion::find($id);
            $data->name = $request->name;
            $data->code = $request->code;
            $data->price = $request->price;
            $data->save();
            return redirect()->route('promo.list')->with('success','Cập nhật thành công');
        }
        $value = DB::table('promotions')->where('id', $id)->get();
        return view('admin.promotion.edit', compact('value','title'));
    }
    public function delete($id){
        promotion::find($id)->delete();
        return redirect()->route('promo.list')->with('success','Đã xóa thành công!');
    }
}
