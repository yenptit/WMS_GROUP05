<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class yRegisterController extends Controller
{
  public function register()
  {

    return view('auth.yRegister');
  }

  public function store(Request $request)
  {
      $request->validate([
          'name' => 'required|string|max:100',
          'phone' => 'required|string|max:10',
          'email' => 'required|string|email|max:255|unique:users',
          'address' => 'string|max:255',
          'password' => 'required|string|min:8|confirmed',
          'password_confirmation' => 'required',
      ]);

      User::create([
          'name' => $request->name,
          'phone' => $request->phone,
          'email' => $request->email,
          'address' => $request->adress,
          'password' => Hash::make($request->password),
      ]);

      return redirect('yLogin');
  }

}