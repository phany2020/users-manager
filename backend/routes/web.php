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

//Route::controller('/customers', '../app/Http/Controllers/Controllers.php');

Route::get('/', function () {
    dump(DB::table('utilisateurs')->get());

   /* $name = 'Stéphanie-Claude';
    return view('welcome', compact('name'));*/
});

/*Route::post('/signIn', function () {
    $isWeekEnd = date('N') >= 6;

    $name = 'Stéphanie-Claude';
    return view('welcome', compact('name', 'isWeekEnd'));
});*/

Route::get('/lister_membres', function () {
    $liste_membres = DB::table('utilisateurs')->where('etat','1')->get();
    return view('welcome', compact('liste_membres'));
});

Route::get('/lister_administrateur', function () {
    dump(DB::table('utilisateurs')->where('etat','0')->get());
    //return view('pages/about');
});

Route::get('/help', function () {
    return view('pages/help');
});

Route::get('/events', function () {
    $events =[
        'Evenement1',
        'Evenement2',
        'Evenement3'
    ];
    
    return view('pages/events', compact('events'));
});