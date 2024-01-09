<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class quransurah extends Controller
{
    //
    function getsurahdata()
    {


        // echo "<h1>testing ........</h1>";




        $dataQuran = Http::get("https://api.alquran.cloud/v1/meta");

        return view("surahs", ["merisurahscollection" => $dataQuran["data"]["surahs"]["references"]]);

        // raw data work
        //   return $dataQuran["data"]["surahs"]["references"];
    }
}
