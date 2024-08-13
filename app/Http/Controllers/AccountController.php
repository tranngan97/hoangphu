<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index()
    {
        $currentUser = \Illuminate\Support\Facades\Auth::user();
        if($currentUser !== NULL && $currentUser->email) {
            return view('account_index_index', compact('currentUser'));
        }
        return Redirect::to('/');
    }
    public function edit(Request $request, $id)
    {
        $currentUser = User::where('id', $id)->first();
        $params = $request->all();
        $currentUser->name = $params['name'];
        $currentUser->phone = $params['phone'];
        $currentUser->dob = strtotime($params['dob']);
        if (!empty($params['new_password'])) {
            $currentUser->password = Hash::make($params['new_password']);
        }
        $currentUser->save();
        return Redirect::to('/tai-khoan');
    }
}
