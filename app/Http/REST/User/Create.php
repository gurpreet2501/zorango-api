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
				
		$resp = Models\Users::Create($data);
		
	 	if(!$resp->isValid())
	 		return Resp::errors($resp->getErrors());
		
		$sess = Models\UserSessions::create([
				'user_id' => $resp->id,
				'token' => Hash::make(time())
			]);	 	

		if(!$sess->isValid())
	 		return Resp::errors($sess->getErrors());	

	 	$output = $resp->toArray();
	 	unset($output['password']);

		return Resp::success($output);
	}
}
