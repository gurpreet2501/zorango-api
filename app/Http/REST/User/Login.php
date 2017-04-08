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
		$email = !empty($data['email']) ? $data['email'] : null;
		$password = !empty($data['password']) ? $data['password'] : null;

		if(!$password)
			return Resp::errorCode(125);

		if(!$email)
			return Resp::errorCode(129);

		$resp = Models\Users::where('email', $email)->first();

		if(!$resp)
			return Resp::errorCode(130);
		
		if($resp->email != $email)
			return Resp::errorCode(130);

		if(!Hash::check($password, $resp->password))
			return Resp::errorCode(130);
		
		$token = Models\UserSessions::select('token')->where('user_id', $resp->id)->first();
		
		if(empty($token))
			return Resp::errorCode(131);

		$data = $resp->toArray();
		
		return Resp::success($data);

	}
}
