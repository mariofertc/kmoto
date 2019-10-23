<?php

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
use Illuminate\Http\Request;

Route::get('/', function () {
    //return view('welcome');
    
    // with()
	$links = \App\Link::all();
	//return view('welcome')->with('links', $links);

	// dynamic method to name the variable
	//return view('welcome')->withLinks($links);
    
    return view('welcome', ['links' => $links]);
});

Route::get('/submit', function () {
    return view('submit');
});
Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $link = tap(new App\Link($data))->save();

    return redirect('/');
});

//MOTOS
Route::get('/view_motos', function () {
    return view('view_motos');
});

Route::get('/submit_moto', function () {
	$motos = \App\Moto::all();
    return view('motos/submit', ['motos' => $motos]);
});
Route::post('/submit_moto', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255',
    ]);

    $moto = tap(new App\Moto($data))->save();

    return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
