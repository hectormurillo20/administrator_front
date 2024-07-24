<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function index()
    {
        return view('welcome.register');
    }

    public function register(Request $request)
    {
       
        $response = $this->request('POST', 'register', [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);

        if(!empty($response['message'])){
            return redirect()->back();
        }

        return redirect('/register');

    }
}
