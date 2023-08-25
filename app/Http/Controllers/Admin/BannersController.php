<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannersRequest;
use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannersController extends Controller
{
    //
    public function list(){
//        for($i = 0; $i< 2; $i++){
//            $data = new banner;
//            $data->image = 'sdgdgdgdg625343443';
//            $data->description = 'abc123456';
//            $data->save();
//        }
//        die();
        $perPage = 5;
        $data = banner::paginate($perPage);
        return view('admin.banner.list', compact('data'));
    }
    public function edit(BannersRequest $request, $id){
        $title = 'Edit Image Banner ID: '.$id;
        $image = DB::table('banners')->where('id', $id)->first();
        if ($request->post()){
            $data = banner::find($id);
            if ($request->hasFile('upload')){
                $imagePath = $request->file('upload')->store('images', 'public');
                $data->image = $imagePath;
            }
            $data->save();
            return redirect()->route('banner.list')->with('success','Cập nhật thành công');
        }
        return view('admin.banner.edit', compact('title', 'image'));
    }
}
