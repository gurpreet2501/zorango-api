<?php /**
* 
*/
/**
* 
*/
namespace App\Http\REST\WeddingItems;
use App\Models;
use Illuminate\Http\Request;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run($data){
		
		$data = Models\WeddingItems::get();	
		return Resp::success($data);
	}
}
