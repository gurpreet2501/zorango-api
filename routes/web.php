<?php
use App\Models;
use Illuminate\Http\Request;
use App\Libs\ZrApi;
use App\Libs\Notifications\Factory as Resp;

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
			
		$post= $request->all();
		
		$class = "App\\Http\\REST\\".$post["object"]."\\".$post["api"];

		if(!class_exists($class)){
			 return Resp::errorCode(114);
		}	 
	
		$t =	'App\\Http\\REST\\'.ucfirst($post['object']).'\\'.ucfirst($post['api']);

		$obj = new $t;

		if(empty($post['data']))
			$post['data'] = [];	

		$resp =  $obj->run($request);

		return ZrApi::json($resp);
	
});
