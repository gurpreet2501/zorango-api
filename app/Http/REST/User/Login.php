<?php 
namespace App\Http\REST\User;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Libs\Notifications\Factory as Resp;
use App\Libs\Validate;

class Login
{
	public function run(Request $request){

		$data = $request->get('data');
	
		return Resp::success(Validate::login($data));

	}
}
