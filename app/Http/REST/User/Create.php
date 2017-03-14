<?php 
namespace App\Http\REST\User;
use App\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Libs\Notifications\Factory as Resp;

class Create
{
	public function run(Request $request){

		$data = $request->get('data');
		$data['password'] = Hash::make($data['password']);
		$data['activated'] = 1;
		$resp = Models\Users::create($data);
		echo "<pre>";
		print_r($resp);
		exit;
		return Resp::success($resp->toArray());
	}
}
