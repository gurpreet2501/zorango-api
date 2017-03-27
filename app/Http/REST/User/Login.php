<?php 
namespace App\Http\REST\User;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Libs\Notifications\Factory as Resp;

class Login
{
	public function run(Request $request){
		$data = $request->get('data');
		echo "<pre>";
		print_r($data);
		exit;
		return Resp::success($resp->toArray());
	}
}
