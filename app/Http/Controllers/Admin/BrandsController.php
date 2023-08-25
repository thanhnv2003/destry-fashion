<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsRequest;
use App\Models\brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BrandsController extends Controller
{
    //
    public function list(){

//        for ($i= 0; $i <= 10; $i++) {
//            $data = new brands;
//            $data->image = 'abc';
//            $data->name = 'xyz';
//            $data->save();
//        }
//        die();
        $perPage = 5;
        $data = brands::paginate($perPage);
        return view('admin.brands.list', compact('data'));
    }
    public function add(BrandsRequest $request){
        $title = 'Add Brand';
        if ($request->post()){
            $data = new brands;
            if ($request->hasFile('upload')){
                $data->name = $request->name;
//                $imageName = time().'.'.$request->upload->extension();
                $imagePath = $request->file('upload')->store('images', 'public');
                $data->image = $imagePath;
                $data->save();
                return redirect()->route('brand.list')->with('success','Thêm mới thành công');
            }
        }
        return view('admin.brands.add',compact('title'));
    }
    public function edit(BrandsRequest $request, $id){
        $title = 'Edit Brand ID: '.$id ;
        $value = DB::table('brands')->where('id', $id)->get();
//        dd(url('storage/images/',$value[0]->image));
        if ($request->post()){
            $data = brands::find($id);
            $data->name = $request->name;
            if ($request->hasFile('upload') && $request->file('upload')->isValid()){
                //xóa ảnh cũ
//                $resultDL = Storage::delete('/public/'.$value->image);
//                if ($resultDL){
//                    $params['image'] = ...upload;
//                }else{
//                    $params['image'] = $value->image;
//                }
                $imageOld = url('storage/',$value[0]->image);
                if (File::exists($imageOld)) {
                    File::delete($imageOld);
                }
                $imagePath = $request->file('upload')->store('images', 'public');
                $data->image = $imagePath;

            }
            $data->save();
            return redirect()->route('brand.list')->with('success','Cập nhật thành công');
        }
        return view('admin.brands.edit', compact('title', 'value'));
    }
    public function delete($id){
        // Xóa dữ liệu trong cơ sở dữ liệu
        brands::find($id)->delete();
        // Chuyển hướng về trang danh sách dữ liệu
        return redirect()->route('brand.list')->with('success','Đã xóa thành công!');
    }
}
