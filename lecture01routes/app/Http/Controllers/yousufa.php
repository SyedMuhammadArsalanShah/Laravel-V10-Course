<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yousufa extends Controller
{
    //

    function checknum($num)
    {

        return view("ibe", ["num"=>$num,"name" => ["sana", "sheikh", "kinza", "kasahf", "yousufa", "shoaiby"]]);
    }
}
