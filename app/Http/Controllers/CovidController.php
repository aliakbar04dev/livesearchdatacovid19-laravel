<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;

class CovidController extends Controller
{
    public function index()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia')->json());
        $suspectsData = $suspects->flatten(0);
        $negara = $suspectsData[0];
        $positif = $suspectsData[1];
        $sembuh = $suspectsData[2];
        $meninggal = $suspectsData[3];

        $hari_ini = date('d F Y');
        // dd($hari_ini);
        return view('index', compact('negara', 'positif', 'sembuh', 'meninggal', 'hari_ini'));
    }

    public function chart()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $suspectsData = $suspects->flatten(1);
        // dd($suspectsData);

        $labels = $suspectsData->pluck('Provinsi');
        $data = $suspectsData->pluck('Kasus_Posi');
        $deaths = $suspectsData->pluck('Kasus_Meni');
        $colors = $labels->map(function($item) {
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Provinsi Dengan Data Tertinggi', 'bar', $data)->backgroundColor($colors);

        return view('positif', [
            'chart' => $chart,
        ]);
    }

    public function chartSembuh()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $suspectsData = $suspects->flatten(1);
        // dd($suspects);

        $labels = $suspectsData->pluck('Provinsi');
        $data = $suspectsData->pluck('Kasus_Posi');
        $sembuh = $suspectsData->pluck('Kasus_Semb');
        $deaths = $suspectsData->pluck('Kasus_Meni');
        $colors = $labels->map(function($item) {
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Provinsi Dengan Data Tertinggi', 'bar', $sembuh)->backgroundColor($colors);

        return view('sembuh', [
            'chart' => $chart,
        ]);
    }

    public function chartMeninggal()
    {
        $suspects = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $suspectsData = $suspects->flatten(1);
        // dd($suspectsData);

        $labels = $suspectsData->pluck('Provinsi');
        $data = $suspectsData->pluck('Kasus_Posi');
        $deaths = $suspectsData->pluck('Kasus_Meni');
        $colors = $labels->map(function($item) {
            return '#' . substr(md5(mt_rand()), 0, 6);
        });

        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Provinsi Dengan Data Tertinggi', 'bar', $deaths)->backgroundColor($colors);

        return view('meninggal', [
            'chart' => $chart,
        ]);
    }
}
