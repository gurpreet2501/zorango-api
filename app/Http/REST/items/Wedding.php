<?php /**
* 
*/
namespace App\Http\REST\Items;
use App\Models;
use App\Libs\ZrApi;
class Wedding
{
	function run(){
		$resp = Models\WeddingItems::get();		
		return ZrApi::success($resp);
	}
}
