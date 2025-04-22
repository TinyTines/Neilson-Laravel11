<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    function halamanregis() {
        return view('registrasi');
    }

    function submitRegistrasi(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('hal.login');
    }

    function halamanlogin() {
        return view('login');
    }

    function submitLogin(Request $request){
        $data = $request->only('email', 'password');

        if (Auth::attempt ($data)) {
            $request->session()->regenerate();
            return redirect()->route('list.produk');
        } else {
            return redirect()->back()->with('error', 'Email atau password anda salah');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken(); 
        return redirect()->route('hal.login');
    }
}
