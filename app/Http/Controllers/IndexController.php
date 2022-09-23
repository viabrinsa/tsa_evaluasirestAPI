<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    public function index()
    {
    $response = Http::get('https://api-berita-indonesia.vercel.app/');
    $data = $response->json();
    dd($data);
    }
}
