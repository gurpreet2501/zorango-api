<?php
use App\Models;
use Illuminate\Http\Request;
use App\Libs\ZrApi;

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

Route::post("/{version}", function ($version, Request $request) {
		
		$post = $request->all();
		
		if(!class_exists("App\\Http\\REST\\".$post["object"]."\\".$post["api"])){
			 echo "error";
			 exit;
		}	 

		$t =	'App\\Http\\REST\\'.ucfirst($post['object']).'\\'.ucfirst($post['api']);
		 
		$obj = new $t;

		$resp =  $obj->run();

		return ZrApi::json($resp);
	
});
