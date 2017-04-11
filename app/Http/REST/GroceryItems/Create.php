<?php 
namespace App\Http\REST\GroceryItems;
use App\Models;
use Illuminate\Http\Request;
use Watson\Validating\ValidatingTrait;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run(Request $request){

		$data = $request->get('data');
		
    $resp = Models\GroceryItems::create($data);    

		if(!$resp->isValid())
			return Resp::errors($resp->getErrors());
		
		return Resp::success($resp->toArray());
	}
}
