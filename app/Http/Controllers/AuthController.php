<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function signup()
    {
        return view('signup');
    }

    public function signupPost(Request $request)
    {

        $response = Http::post('http://localhost/ETambakku/public/api/register', [
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => $request->password
        ]);
        // dd($response->json());
        if ($response->json()['success']) {
            return back()->with('messages', 'Register successfully');
        } else {
            return back()->with('messages', $response->json()['messages']['email'][0]);
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {

        $response = Http::post('http://localhost/ETambakku/public/api/login', [
            'email'     => $request->email,
            'password'  => $request->password
        ]);
        // dd($response->json());
        if ($response->json()['success']) {
            session([
                'token' => $response->json()['token'],
                'account' => $response->json()['user']
            ]);
            return redirect('/welcome');
        } else if ($response->json()['error']) {
            return back()->with('error', 'Error Email or Password');
        }
    }

    public function logout()
    {
        // Auth::logout();
        $response = Http::withToken(session('token'))->post('http://localhost/ETambakku/public/api/logout');
        session()->forget('token');
        if ($response->json()['success']) {
            return redirect()->route('login');
        } else {
            return back()->with('error', 'Logout Error');
        }
    }
}
