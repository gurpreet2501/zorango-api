<?php 
namespace App\Http\REST\Items;
use App\Models;
use Illuminate\Http\Request;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run(Request $request){
		$data = $request->get('data');

    $obj = new Models\Items;    
		
	 	echo "<pre>";
	 	print_r($obj->getErrors());
	 	exit;
     
		$resp = Models\Items::create($data);	
		return Resp::success($resp->toArray());
	}
}
