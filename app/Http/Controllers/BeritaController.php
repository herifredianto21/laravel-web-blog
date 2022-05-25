<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BeritaController extends Controller
{
    public function apiberita()
    {
        $response = Http::get('https://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=2ab033121248444e82ebe2bc3c0599bc');
        $datas = $response->json();

        return view('home', ['datas' => $datas]);
        // return view('home', compact('datas'));
    }
}
