<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class LoginController extends Controller
{
    public function index()
    {
        return view('account_login');
    }

    public function login(Request $request)
    {
        $params = $request->all();
        try {
            if ($params['email'] && is_numeric($params['email'])) {
                $user = User::where('phone', $params['email'])->first();
                if ($user) {
                    $params['email'] = $user->email;
                }
            }
            $credentials = [
                'email' => $params['email'],
                'password' => $params['password']
            ];
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            } else {
                return redirect()->intended('/dang-nhap');
            }
        } catch (\Exception $e) {
            return redirect()->intended('/dang-nhap');
        }
    }

    public function register(Request $request)
    {
        $params = $request->all();
        $newAccount = new User();
        $newAccount->email = $params['email'];
        $newAccount->role_id = 2;
        $newAccount->name = $params['first_name']. ' '. $params['last_name'];
        $newAccount->phone = $params['phone'];
        $newAccount->password = Hash::make($params['password']);
        $newAccount->save();
        return Redirect::to('dang-nhap');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
