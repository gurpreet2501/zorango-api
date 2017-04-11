<?php 
namespace App\Http\REST\Categories;
use App\Models;
use Illuminate\Http\Request;
use Watson\Validating\ValidatingTrait;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run(Request $request){

		$data = $request->get('data');
		
		$category_name = !empty($data['category_name']) ? $data['category_name'] : '';
		
		if(empty($category_name))
			return Resp::errorCode(132);

    $resp = Models\Categories::create($data);

		if(!$resp->isValid())
			return Resp::errors($resp->getErrors());
		
		return Resp::success($resp->toArray());
	}
}
