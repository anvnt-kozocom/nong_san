<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
  //
  public function index()
  {
    return view('backend.auth.login');
  }
  public function login(Request $request)
  {
    // dd(Hash::make($request->password));
    $login = [
      'email' => $request->email,
      'password' => $request->password,
      'level' => 1,
    ];
    if (Auth::attempt($login)) {
      return redirect(route('admin-home'));
    } else {
      return redirect()->back()->withInput()->withErrors([
        'err' => 'Email hoặc mật khẩu không chính xác!',
      ]);
    }
  }
  public function logout()
  {
    Auth::logout();
    return redirect(route('home'));
  }
}