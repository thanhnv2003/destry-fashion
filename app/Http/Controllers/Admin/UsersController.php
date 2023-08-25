<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    //
    public function list(){
        $perPage = 5;
        $data = User::paginate($perPage);
        return view('admin.user.list', compact('data'));
    }
    public function add(Request $request){
        $title = "Add User";
        if ($request->post()){
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->role = $request->role;
            $data->save();
            if ($data->id){
                return redirect()->route('user.list')->with('success','Thêm mới thành công');
            }
        }
        return view('admin.user.add', compact('title'));
    }
    public function edit(Request $request, $id){
        $title = 'Edit User: '.$id;
        if ($request->post()) {
            $data = User::find($id);
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->role = $request->role;
            $data->save();
            return redirect()->route('user.list')->with('success','Cập nhật thành công');
        }
        $value = DB::table('users')->where('id', $id)->get();
        return view('admin.user.edit', compact('title','value'));
    }
    public function delete($id){
        User::find($id)->delete();
        return redirect()->route('user.list')->with('success','Đã xóa thành công!');
    }
}
