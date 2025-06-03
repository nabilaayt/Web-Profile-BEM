<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
      //
      public function login(Request $request)
      {
          $credentials = $request->validate([
              'email' => ['required', 'email'],
              'password' => ['required'],
          ]);

          $user = User::where('email', $request->email)->first();
          session(
              ['username' => $user->username],
          );


          if (Auth::attempt($credentials)) {
              $request->session()->regenerate();

              return redirect()->intended('admin/main');
          }
          return redirect('admin')->with('Errors', 'Username atau password salah');
      }
}
