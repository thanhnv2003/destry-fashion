<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductsRequest;
use App\Models\products;
use App\Models\image_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    //
    public function list(){
        $perPage = 5;
        $data = products::paginate($perPage);
        $brand = DB::table('brands')->select('id', 'name')->get();
        $category = DB::table('categories')->select('id', 'name')->get();
        return view('admin.product.list', compact('data', 'brand', 'category'));
    }
    public function add(ProductsRequest $request){
        $title = 'Add Product';
        $brand =  DB::table('brands')->select('id', 'name')->get();
        $category = DB::table('categories')->select('id', 'name')->get();
        if ($request->post()){
            $data = new products;
            $data->id_cate = $request->category;
            $data->id_brands = $request->brand;
            $data->name = $request->name;
            $data->amount = $request->amount;
            $data->old_price = $request->old_price != '' ? $request->old_price : 0;
            $data->sale_price = $request->sale_price;
            $data->description = $request->editor1;
            $image = [];
            for ($i = 0; $i < 5; $i++){
                $name = 'No image';
                array_push($image, $name);
            }
//            dd($image);
            $data->image = json_encode($image);
            $data->save();
            return redirect()->route('pro.list')->with('success','Thêm mới thành công');
        }
        return view('admin.product.add', compact('title', 'brand', 'category'));
    }
    public function edit(ProductsRequest $request, $id){
        $title = 'Edit Product ID: '.$id;
        $brand =  DB::table('brands')->select('id', 'name')->get();
        $category = DB::table('categories')->select('id', 'name')->get();

        if ($request->post()){
            $data = products::find($id);
            $data->id_cate = $request->category;
            $data->id_brands = $request->brand;
            $data->name = $request->name;
            $data->amount = $request->amount;
            $data->old_price = $request->old_price != '' ? $request->old_price : 0;
            $data->sale_price = $request->sale_price;
            $data->description = $request->editor1;
            $data->save();
            return redirect()->route('pro.list')->with('success','Cập nhật thành công');
        }
        $product = DB::table('products')->where('id', $id)->first();
//        dd($product);
        return view('admin.product.edit', compact('title', 'brand', 'category', 'product'));
    }
    public function delete($id){
// Xóa dữ liệu trong cơ sở dữ liệu
        products::find($id)->delete();
        // Chuyển hướng về trang danh sách dữ liệu
        return redirect()->route('pro.list')->with('success','Đã xóa thành công!');
    }
}
