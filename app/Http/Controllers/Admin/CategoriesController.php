<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesRequest;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class CategoriesController extends Controller
{
    //
    public function list(){
        $perPage = 5;
        $data = categories::paginate($perPage);
        return view('admin.categories.list', compact('data'));
    }
    public function add(CategoriesRequest $request){
        $title = 'Add Category';
        if ($request->post()){
            $data = new categories();
            $data->name = $request->catename;
            $data->save();
            return redirect()->route('cate.list')->with('success','Thêm mới thành công');
        }
        return view('admin.categories.add',compact('title'));
    }
    public function edit(CategoriesRequest $request, $id){
        $title = 'Edit Category: '.$id;
        if ($request->post() && $request->catename){
            $data = categories::find($id);
            $data->name = $request->catename;
            $data->save();
            return redirect()->route('cate.list')->with('success','Cập nhật thành công');
        }
        $value = DB::table('categories')->where('id', $id)->get();
        return view('admin.categories.edit', compact('value','title'));
    }

    public function delete($id){
//        dd($id);
        // Xóa dữ liệu trong cơ sở dữ liệu
        categories::find($id)->delete();
        // Chuyển hướng về trang danh sách dữ liệu
        return redirect()->route('cate.list')->with('success','Đã xóa thành công!');
    }
}
