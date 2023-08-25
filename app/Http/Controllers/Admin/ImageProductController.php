<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageProductRequest;
use App\Models\image_product;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImageProductController extends Controller
{
    //
    public function list($id){
        $query = DB::table('products')
            ->where('id', '=', $id)
            ->orderBy('id', 'asc')
            ->get();
        $data = json_decode($query[0]->image);
//        dd($data);
        return view('admin.image.list', compact('data','id'));
    }
    public function edit(ImageProductRequest $request, $id, $product){
//        dd($product);
        $title = 'Edit Image Product ID: '.$product;
        $query = DB::table('products')->where('id', $product)->first();
        $image = json_decode($query->image);
//        dd($image[$id]);
        if ($request->post()){
            $data = products::find($product);
            if ($request->hasFile('upload')){
                $imagePath = $request->file('upload')->store('images', 'public');
                $image[$id] = $imagePath;
//                dd($image);
                $data->image = $image;
            }
            $data->save();
            return redirect()->route('image.list', [$product])->with('success','Cập nhật thành công');
        }

        return view('admin.image.edit', compact('title', 'image', 'product', 'id'));
    }
}
