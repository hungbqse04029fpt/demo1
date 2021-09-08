<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v2;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello-world/{name}/{age}', function ($name, $age) {
    return "name:$name========= age:$age";
})->where(['name' => '[a-z]+', 'age' => '[0-9]+']);
Route::get('/hello', function () {
    return view('hello');
});
//sent data to view 
Route::get('helloworld/{content}/{content2}', function ($content, $content2) {
    return view('helloworld', ['content' => $content, 'content2' => $content2]);
});
Route::get('sent-data/{v1}/{v2}', function ($v1, $v2) {
    //return view('test.test', ["v1" => $v1, 'v2' => $v2]);
    //$arr = array(0,1,2,3,4,5,6,7,9);
    $arr = array();
    for ($i = $v1; $i <= $v2; $i++) {
        array_push($arr, $i);
    }
    /*
    var_dump($arr);
    for($i=0;$i<=sizeof($arr);$i++){
        echo "i = $i";
    };
    */
    return view('test.test');
});
//Template inheritance with blade.php
Route::get('inher/{v1}/{v2}', function ($v1, $v2) {
    return view('test.test2', ['v1' => $v1, 'v2' => $v2]);
});

//Admin test
Route::get('login', function () {
    return view('admin.login');
});
//call function in controller
Route::get('loginctrl/{v1}/{v2}', 'adminController@index');

//Database
Route::get('/database', function () {
    $data = DB::table('msyain')->get();
    echo $data;
});
