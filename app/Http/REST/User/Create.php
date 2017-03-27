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

		$password = !empty($data['password']) ? $data['password'] : null;

		if(!$password)
			return Resp::errorCode(125);

		$data['password'] = Hash::make($data['password']);

		$data['activated'] = 1;
		
		$resp = Models\Users::Create($data);
		
	 	if(!$resp->isValid())
	 		return Resp::errors($resp->getErrors());

		return Resp::success($resp->toArray());
	}
}
