<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CreateCrontroller extends Controller
{

    public function create(Request $request)
    {

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Referer' => 'http://localhost:8000',
            'Accept' => 'application/json',
        ])->post('http://localhost:8000/register', [
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
