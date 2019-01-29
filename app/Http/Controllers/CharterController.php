<?php
namespace App\Http\Controllers;

use View;

use App\Models\Charter\Classes;
use App\Models\Charter\Resources;
use App\Models\Charter\Type;


class CharterController extends BaseController {

    //if you have a constructor in other controllers you need call constructor of parent controller (i.e. BaseController) like so:

    public function __construct(){
       parent::__construct();
    }

    public function Index(){
	
		
		$types = Type::orderBy('sort','type_desc')->paginate(2);
		
		$resources = [];
		$classes = [];
		
		foreach($types as $type){
		
		
			$resources[$type->id] = Resources::Where('type_id',$type->id)->get();
			
			foreach($resources[$type->id] as $resourcesIDs){
			
				$resId = $resourcesIDs->res_id;
			
				$classes[$resId] = Classes::Where('res_id',$resId)->get();
			}
			
		}
		
		
		return view('charter.index',['types'=>$types , 'resources'=>$resources, 'classes'=>$classes]);
		
		/*print_r($types); exit;
		
		$classes = ::get();*/
	
    }

}

?>