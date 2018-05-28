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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ProcessController@index');
Route::get('/index', 'ProcessController@index');
Route::get('/export', 'ProcessController@exports');
Route::get('/sigmaker', 'IntController@sigMaker');

Route::post('/process', 'ProcessController@docProcess');


Route::get('excel-test', function () {
    // http://localhost/assets/panel/excel/test123.xls
    // /public/assets/panel/excel/test123.xls
    $address = 'testinput/banking.xls';
    Excel::load($address, function($reader) {
        $results = $reader->get();
// $results->first_name;
        // foreach ($results as $value) {
        //   // print(gettype($value[0]));
        //   $array =  (array) $value[0];
        //   print_r($array);
        // }

        //
        // foreach ($results as $value) {
        //   // print(gettype($value[0]));
        //   // $array =  (array) $value[0];
        //   print($value->first());
        // }

        dd($results);
    });
});
