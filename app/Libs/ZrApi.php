<?php /**
* 
*/
namespace App\Libs;
use Illuminate\Http\JsonResponse;
class ZrApi
{
	
	public static function json($json){
		return new JsonResponse($json);
	}

} ?>