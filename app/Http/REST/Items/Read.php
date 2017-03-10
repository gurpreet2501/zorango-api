<?php /**
* 
*/
namespace App\Http\REST\Items;
use App\Models;
use App\Libs\Notifications\Factory as Resp;
class Read
{
	function run($data){
		$data = Models\Items::get();
		return Resp::success($data);
	}
}
