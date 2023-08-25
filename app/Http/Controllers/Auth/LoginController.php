<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Mail\ResetPasswordMail;
use App\Models\bill;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    //
    public function login(LoginRequest $request){
        if ($request->isMethod('POST') && $request->btnLogin != '') {
//            dd($request->all());
            //password bắt buộc khi đăng ký phải hash:make
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                //đăng nhập thành công

                // Nếu xác thực thành công, lưu thông tin đăng nhập vào session
                $request->session()->regenerate();
                $user = Auth::user();
                $request->session()->put('user_id', $user->id);
                $request->session()->put('user_name', $user->name);
                $request->session()->put('user_role', $user->role);

                if (Session::get('user_role') == 'Admin'){
                    return redirect()->route('admin');
                }else{
                    // Các thông tin khác bạn muốn lưu vào session cũng có thể thêm ở đây
                    return redirect()->route('index');
                }
            } else {
                //đăng nhập không thành công
                Session::flash('error', 'Sai mật khẩu hoặc email');
                return redirect()->route('login');
            }
        }
        return view('client.auth.login-register');
}
    public function register(LoginRequest $request){
        if ($request->isMethod('POST') && $request->btnRes != ''){
            $data = new User;
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->save();
            if ($data->id){
                Session::flash('success', 'Đăng ký thành công');
                return redirect()->route('login');
            }
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Session::flush();
        return redirect()->route('index');
    }
    public function myAccount(LoginRequest $request){
        $user = Auth::user();
        $bill = bill::where('id_user', $user->id)->get();
//        dd($bill);
//                dd($user);
        if ($request->isMethod('POST') && $request->btnSm != ''){

            if ($request->old_password != ''){
                $user = User::findOrFail($request->user_id);

                if (!Hash::check($request->old_password, $user->password)) {
                    return back()->withErrors([
                        'old_password' => 'Mật khẩu cũ không chính xác.',
                    ]);
                }

                if ($request->new_password !== $request->new_password_confirmation) {
                    return back()->withErrors([
                        'new_password' => 'Mật khẩu mới không khớp.',
                    ]);
                }
                $request->validate([
                    'new_password' => ['required', 'min:6', 'max:255'],
                ]);
                $user->password = Hash::make($request->new_password);
            }

            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

            return redirect()->route('my_account')->withSuccess('Cập nhật thành công.');
        }

        return view('client.auth.account', compact('user', 'bill'));
    }
    public function updateAddress(LoginRequest $request){
        if ($request->isMethod('POST') && $request->btnAddress != ''){
            $user = User::findOrFail($request->user_id);

            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
            return redirect()->route('my_account')->withSuccess('Cập nhật thành công.');
        }
    }
    public function forgot(LoginRequest $request){
        if ($request->isMethod('POST') && $request->btnForgot != ''){
            $email = $request->email;
            $user = User::where('email', $email)->first();
            if ($user){
                $token = Str::random(64);
                DB::table('password_resets')->insert([
                   'email' =>$email,
                   'token' => $token,
                   'created_at' => now()
                ]);
                $resetLink = url('/reset-password/'.$token);
                Mail::to($email)->send(new ResetPasswordMail($resetLink));
                Session::flash('success', 'Yêu cầu đặt lại mật khẩu đã được gửi đến email của bạn.');
                return back();
            }else{
                Session::flash('error', 'Email này chưa được đăng ký! Vui lòng thử lại');
                return back();
            }
        }
        return view('client.auth.forgot');
    }
    public function resetPass(LoginRequest $request, $token){
//        dd($token);
        if ($request->isMethod('POST') && $request->btnReset != ''){
            $token = $request->token;
            $email = DB::table('password_resets')->where('token','=',$token)
                ->value('email');
            if (!$email){
                Session::flash('error', 'Mã xác thực không hợp hợp lệ');
                return redirect()->back();
            }
            User::where('email', $email)->update(['password' => Hash::make($request->password)]);
            DB::table('password_resets')->where('token', $token)->delete();
            return redirect()->route('login');
        }
        return view('client.auth.reset-password',compact('token'));
    }
}

