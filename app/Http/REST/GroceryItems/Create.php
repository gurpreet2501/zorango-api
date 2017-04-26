<?php 
namespace App\Http\REST\GroceryItems;
use App\Models;
use Illuminate\Http\Request;
use Watson\Validating\ValidatingTrait;
use App\Libs\Notifications\Factory as Resp;

class Create
{
 
	public function run(Request $request){
			
		$data = $request->input('data');
		
		$images = $request->all()['data'];
		
		   	
    $resp = Models\GroceryItems::create($data);    
		
		if(!$resp->isValid())
			return Resp::errors($resp->getErrors());

		foreach($images['image'] as $key => $img){
		
			if($img->isValid()){
				$extension = $img->getClientOriginalExtension();
				$destinationPath = storage_path().'/uploads/';
				$fileName = 'file_'.time()*rand().$key.'.'.$extension; // renameing image
				$file_path = $destinationPath.$fileName;
				if(file_exists($fileName))
					$fileName = 'file_'.time()*rand().$key.'.'.$extension;

	      $img->move($destinationPath, $fileName);
			}

			 $imgResp = Models\Images::create([
					'image' => $fileName,
					'product_id' => $resp->id,
				]);
    }
			
		return Resp::success($resp->toArray());
	}
}
