<?php /**
* 
*/
namespace App\Http\REST\GroceryItems;
use App\Models;
use App\Libs\Notifications\Factory as Resp;
class Read
{
	function run(){
		
		$data = Models\GroceryItems::with('images')->get()->toArray();
		return Resp::success($data);
	}
}
