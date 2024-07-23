<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

abstract class Controller
{

    private const HEADERS = [
        'Content-Type' => 'application/json',
        'Referer' => 'http://localhost:8000',
        'Accept' => 'application/json',
    ];

    private const URL = 'http://localhost:8000/';

    protected function request($method = null, $url, $data = []){

        switch ($method) {
            case 'GET':
                $response = Http::withHeaders(self::HEADERS)->get(self::URL.$url, $data);
                break;
            case 'POST':
                $response = Http::withHeaders(self::HEADERS)->post(self::URL.$url, $data);
                break;
            case 'PUT':
                $response = Http::withHeaders(self::HEADERS)->put(self::URL.$url, $data);
                break;
            case 'DELETE':
                $response = Http::withHeaders(self::HEADERS)->delete(self::URL.$url, $data);
                break;
            default:
                $response = Http::get($url);
                break;
        }

        return $response->json();
        
    }
}
