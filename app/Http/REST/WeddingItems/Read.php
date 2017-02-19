<?php /**
* 
*/
namespace App\Http\REST\WeddingItems;
use App\Models;
use App\Libs\Notifications\Factory as Resp;
class Read
{
	function run($data){
		$data = Models\WeddingItems::get();	
		return Resp::success($data);
	}
}
