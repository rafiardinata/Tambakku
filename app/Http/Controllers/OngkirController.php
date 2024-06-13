<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OngkirController extends Controller
{
    public function showOngkir()
    {
        $response = Http::withHeaders([
            'key' => 'e853063e3f339b6d9d7a69ffd9ca1c2b'
        ])->get('https://api.rajaongkir.com/starter/city');

        $cities = $response['rajaongkir']['results'];
        return view('ongkir', ['cities' => $cities, 'ongkir'=>'']);
    }

    public function cekOngkir(Request $request)
    {
        $response = Http::withHeaders([
            'key' => 'e853063e3f339b6d9d7a69ffd9ca1c2b'
        ])->get('https://api.rajaongkir.com/starter/city');

        $responseCost = Http::withHeaders([
            'key' => 'e853063e3f339b6d9d7a69ffd9ca1c2b'
        ])->post('https://api.rajaongkir.com/starter/cost', [
            'origin'        => $request->origin,
            'destination'   => $request->destination,
            'weight'        => $request->weight,
            'courier'       => $request->courier,
        ]);

        // dd($responseCost->json());

        $cities = $response['rajaongkir']['results'];
        $ongkir = $responseCost['rajaongkir'];
        
        return view('ongkir', ['cities' => $cities, 'ongkir' => $ongkir]);
        // dd($request->all());
    }
}
