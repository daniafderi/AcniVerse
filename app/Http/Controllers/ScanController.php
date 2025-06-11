<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ScanController extends Controller
{
    public function index() {
        return view('scan.index');
    }

    public function scan(Request $request) {
        $image = $request->file('file');

    $response = Http::timeout(90)->attach(
        'file',               // nama field yang diharapkan FastAPI
        fopen($image->getPathname(), 'r'),  // buka stream file (lebih aman)
        $image->getClientOriginalName()
    )->post('https://rhtms-fastapi-model.hf.space/predict/');

    //dd($response->json());

    return view('rekomendasi.index', ['result' => $response->json()]);
    }
}
