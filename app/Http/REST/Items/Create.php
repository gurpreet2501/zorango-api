<?php 
namespace App\Http\REST\Items;
use App\Models;
use Illuminate\Http\Request;
use Watson\Validating\ValidatingTrait;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run(Request $request){
		$data = $request->get('data');

    $obj = new Models\Items;    

		$resp = Models\Items::create($data);	
		
		if(!$resp->isValid())
			return Resp::errors($resp->getErrors());
		
		return Resp::success($resp->toArray());
	}
}
