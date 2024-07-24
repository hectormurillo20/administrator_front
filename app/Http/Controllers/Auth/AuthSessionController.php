<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthSessionController extends Controller
{
    public function index()
    {
        return view('welcome.login');
    }

    public function login(Request $request)
    {
        $response = $this->request('POST', 'login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if(!empty($response['message'])){
            return redirect()->back();
        }

        return redirect(route('dashboard'));
    }

    // public function logout()
    // {
    //     $response = $this->request('POST', 'logout');

    //     if(!empty($response['message'])){
    //         return redirect()->back();
    //     }

    //     return redirect('/');
    // }
}
