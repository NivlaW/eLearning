<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showGuruLogin()
    {
        return view('login-guru');
    }

    public function guruLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ],
        [
            'username.required' => 'Username wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            if (auth()->user()->is_teacher == 1) {
                return redirect('guru');
            }else{
                return redirect('murid');
            }
        }else{
            return redirect()->route('')->with('error','Email-Address And Password Are Wrong.');
        }
    }
}