<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(request $request)
    {
        $user = new User;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->save();
        return redirect ('/register');
    }

    public function validate_login(request $request)
    {
        $request->validate(['username'=>'required','password'=>'required']);
        $credential = $request->only('username','password');
        if(Auth::attempt($credential))
        {
            if (Auth::user()->role_as == 1)
            {
                return redirect('/admin/dasbord');
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home');
            }
            else
            {
                return redirect('/home');
            }
        }
    }







}
