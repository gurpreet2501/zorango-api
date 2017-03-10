<?php /**
* 
*/
namespace App\Libs;
class ZrApi
{
	
	function __construct($resp)
	{
		$this->resp = $resp;
	}

	public static function success($resp){
		$data = [
			'STATUS' => 'SUCCESS',
			'RESPONSE' => $resp
		];
		return response()->json($data);
	}
	
	public static function json($json){
		return new JsonResponse($json);
	}
}
