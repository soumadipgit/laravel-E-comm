<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        // print_r(Auth::user());
        // return $req->input();
        $username = User::where(['email' => $req->email])->first();
        // return $username->password;
        if (!$username || !Hash::check($req->password, $username->password)) {
            return 'username or password is not correct';
        } else {
            $req->session()->put('username', $username);
            return redirect('/');
        }
    }
}
