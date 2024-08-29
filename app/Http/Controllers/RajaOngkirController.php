<?php

namespace App\Http\Controllers;

use App\Models\Citie;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RajaOngkirController extends Controller
{
    public function create_location()
    {
        // try {
        $provinces = Http::withOptions(['verify' => false])->withHeaders([
            'key' => env('RAJAONGKIR_API_KEY')
        ])->get('https://api.rajaongkir.com/starter/province')
            ->json()['rajaongkir']['results'];

        foreach ($provinces as $province) {
            $check_province = Province::where('province_id', $province['province_id'])->first();
            if (!$check_province) {
                $prov = new Province();
                $prov->province_id = $province['province_id'];
                $prov->name = $province['province'];
                $prov->save();
            }

            $cities = Http::withOptions(['verify' => false])->withHeaders([
                'key' => env('RAJAONGKIR_API_KEY')
            ])->get('https://api.rajaongkir.com/starter/city?province=' . $province['province_id'])
                ->json()['rajaongkir']['results'];

            foreach ($cities as $city) {
                $check_city = City::where('city_id', $city['city_id'])->first();

                if (!$check_city) {
                    $c = new City();
                    $c->city_id = $city['city_id'];
                    $c->province_id = $city['province_id'];
                    $c->name = $city['city_name'];
                    $c->type = ($city['type'] == 'Kabupaten') ? 'Kab' : 'Kota';
                    $c->postal_code = $city['postal_code'];
                    $c->save();
                }
            }
        }

        dd('berhasil!');

        // return response()->json($response);
        // } catch (\Throwable $th) {
        //     return response()->json([
        //         'success' => false,
        //         'message' => $th->getMessage(),
        //         'data'    => []
        //     ]);
        // }
    }
}
