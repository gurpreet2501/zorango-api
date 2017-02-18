<?php /**
* 
*/
namespace App\Http\REST\Items;
use App\Models;
use App\Libs\Notifications\Factory as Resp;
class Wedding
{
	function run(){
		// $data = Models\WeddingItems::get();	
		$data = [
		'test' => 'passed dsf dsvv'
		];
		return Resp::success($data);
	}
}
