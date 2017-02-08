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

	function error($code){

	}

	public static function success($resp){
		$data = [
			'STATUS' => 'SUCCESS',
			'RESPONSE' => $resp
		];
		return response()->json($data);
	}

} ?>