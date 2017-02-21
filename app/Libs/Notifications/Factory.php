<?php /**
* 
*/
namespace App\Libs\Notifications;
class Factory
{

	public static function success($data){
		
		return [
		'STATUS' => 'SUCCESS',
		'RESP'   => $data,
		'ERRORS' => []
		];
	}

	public static function errorCode($code){
		
		return [
		'STATUS' => 'FAILED',
		'ERRORS' => [$code => config("errors.{$code}")]
		];
	}

} ?>