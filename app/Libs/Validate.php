<?php /**
* 
*/
namespace App\Libs;
use App\Models;
use Illuminate\Support\Facades\Hash;
class Validate
{

	function __construct()
	{
		$this->resp = [];
	}

	public static function login($data){
		
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
		
		$data = self::unsetFields($resp->toArray());

		return self::bindToken($data);

	}
	public static function unsetFields($data){
		$fields = ['banned','ban_reason','new_password_key','new_email','new_email_key','last_ip','last_login'];
		foreach ($fields as $key => $value) {
			unset($data[$value]);
		}

		return $data;
	}

	public static function bindToken($data){
		$token = Models\UserSessions::select('token')->where('user_id', $data['id'])->first();
		
		if(empty($token))
			return Resp::errorCode(131);
		$data['token'] = $token->token;
		
		return $data;
	}

}
