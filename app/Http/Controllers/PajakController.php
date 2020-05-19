<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class PajakController extends Controller
{
    public function index()
    {
        $client     = new Client();
        $request = Http::get('http://localhost/intipajak/api/wajibpajak/indexwajibpajak');
        $response   = $request->getBody();

        $pajak = json_decode($response, true);
        return view('pajak', ['pajak' => $pajak]); //nama blade [nama dipanggil => $id]
        // var_dump($pajak);
        // dd($pajak);
    }
}
