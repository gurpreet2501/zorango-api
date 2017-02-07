<?php /**
* 
*/
namespace App\Http\REST\Items;
use App\Models;
class Wedding
{
	function run(){
		$data = Models\WeddingItems::get();		
		return response()->json($data);
	}
}
