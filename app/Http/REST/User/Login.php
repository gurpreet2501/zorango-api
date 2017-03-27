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
		$username = !empty($data['username']) ? $data['username'] : null;
		$password = !empty($data['password']) ? $data['password'] : null;

		if(!$password)
			return Resp::errorCode(125);

		if(!$email && !$username)
			return Resp::errorCode(129);

		if($username)
			$resp = Models\Users::where('username', $username)->first();
		else
			$resp = Models\Users::where('email', $email)->first();

		if(!Hash::check($password, $resp->password))
			return Resp::errorCode(130);

		return Resp::success($resp->toArray());
	}
}
