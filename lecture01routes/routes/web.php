<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get("/khuzaima", function () {




    return view("info");
});






Route::get("/contact", function () {




    return view("contact");
});



// Route::get("/post/{id}", function () {




//     return view("mypost");
// });



// Route::get("/post/{id?}", function ($id = "no value here") {



//     echo "id " . $id;
//     // return view("mypost");
// });







Route::get("/post/{id?}", function ($id = "no value here") {



    echo "id " . $id;
    // return view("mypost");
    //    })->whereNumber("id");
    //    })->whereAlpha("id");
    //    })->whereAlphaNumeric("id");
    //    })->where("id","[a-zA-Z0-9]+");
})->whereIn("id", ["khuzaima", "red", "Dulha"]);







Route::get("/home/{id?}/{english?}/{urdu?}/{islamiyat?}/{obtainedtotal?}/{per?}/{grade?}", function (

    $id = "insert valid name ",
    $english = "N/A",
    $urdu = "N/A",
    $islamiyat = "N/A",
    $obtainedtotal = "N/A",
    $per = "N/A",
    $grade = "N/A",

) {

    $obtainedtotal = $english + $urdu + $islamiyat;




    $per = ($obtainedtotal / 300) * 100;







    return view("info", compact("id", "english", "urdu", "islamiyat", "obtainedtotal", "per", "grade"));
});





Route::get("/post/{id?}/{number?}/{res?}", function ($id = "no value here", $number = null, $res = null) {


    if ($number % 2 == 0) {


        $res = "even";
    } else {
        $res = "odd";
    }




    return view("info", compact("id", "res"));
});
