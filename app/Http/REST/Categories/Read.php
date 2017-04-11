<?php 
namespace App\Http\REST\Categories;
use App\Models;
use Illuminate\Http\Request;
use Watson\Validating\ValidatingTrait;
use App\Libs\Notifications\Factory as Resp;

class Read
{
 
	public function run(Request $request){
		return Resp::success(Models\Categories::get());
	}
}
