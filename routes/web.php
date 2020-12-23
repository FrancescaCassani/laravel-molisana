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

return view('product', compact('product', 'id'));
})->name('product');






// LE RICETTE
Route::get('/ricette', function () {
    
    $data = [
        [
            'src' => 'https://www.lamolisana.it/wp-content/uploads/2017/06/box-ricetta-1-600x600.jpg',
            'title' => 'Caserecce alla molisana'
        ],
        [
            'src' => 'https://www.lamolisana.it/wp-content/uploads/2017/06/box-ricetta-5-600x600.jpg',
            'title' => 'Fusilli tonno e cipolla'
        ],
    ];


    return view('ricette', ['ricette' => $data]);
})->name('ricette');




// LE NEWS
Route::get('/news', function () {
    
    $data = [
        [
            'src' => 'https://www.lamolisana.it/wp-content/uploads/bfi_thumb/pranzo-poveri-m-ognt1fwyr0j9sg0u5ussfinxjoee7sltzgddwctwa4.jpg',
            'title' => '5000 pacchetti di pasta a Roma per la giornata dei poveri',
            'when' => '23/11/2020'
        ],
        [
            'src' => 'https://www.lamolisana.it/wp-content/uploads/bfi_thumb/unitalsi-articolo-cover-oyu29ktnj3sx9wiygrqgbc237zov11w4moayal4fjg.jpg',
            'title' => 'Nuovo automezzo donato all\'Unitalsi di Campobasso',
            'when' => '23/11/2020'
        ],
        [
            'src' => 'https://www.lamolisana.it/wp-content/uploads/bfi_thumb/primo-soccorso-m-owbf13zsondizhneix5ni41kai8unggjs5a23wnhkc.jpg',
            'title' => 'Attività formative di primo soccorso in azienda',
            'when' => '02/10/2020'
        ],
    ];


    return view('news', ['news' => $data]);
})->name('news');