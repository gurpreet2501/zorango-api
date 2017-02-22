<?php 
namespace App\Http\REST\WeddingItems;
use App\Models;
use Illuminate\Http\Request;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run(Request $request){
		$data = $request->get('data');
		
		$resp = Models\WeddingItems::create($data);	
		return Resp::success($resp->toArray());
	}
}
