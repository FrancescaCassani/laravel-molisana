<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// HOMEPAGE
Route::get('/', function () {

    //Riporto i dati che ho estrapolato dal file in config per rendere il tutto più fruibile
    $data = config('site-data');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $card) {

        //Recupero la posizione dell'elemento nell'array con la chiave
        $card['id'] = $key; 

        if($card['tipo'] == 'lunga') {
            $lunghe[] = $card;
        } 
        elseif($card['tipo'] == 'corta') {
            $corte[] = $card;
        }
        elseif ($card['tipo'] == 'cortissima') {
            $cortissime[] = $card;
        }
    }


    //TOOL DI DEBUG
    //dd($data);
    
    return view('home', compact('lunghe', 'corte', 'cortissime')); 
});



//ELENCO PRODOTTI

Route::get('/product/{id}', function ($id) {

    //dump($id);

    //Riporto i dati che ho estrapolato dal file in config per rendere il tutto più fruibile
    $data = config('site-data');

    $product = $data[$id];

    $length = count($data) -  1;

return view('product', compact('product', 'id', 'length'));
})->name('product');






// LE RICETTE
Route::get('/ricette', function () {
    
    $data = config('ricette-data');

    return view('ricette', ['ricette' => $data]);
})->name('ricette');




// LE NEWS
Route::get('/news', function () {
    
    $data = config('news-data');

    return view('news', ['news' => $data]);
})->name('news');