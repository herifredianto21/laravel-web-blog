<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::where('id', $id)
                            ->where('kode_artikel', 'tagar')
                            ->first();
        // dd($artikel);
        return view('beranda', ['artikel' => $artikel]);
    }
}
