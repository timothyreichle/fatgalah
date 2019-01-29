<?php
namespace App\Http\Controllers;

use View;

use App\Models\Charter\Classes;
use App\Models\Charter\Resources;
use App\Models\Charter\Type;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class CharterController extends BaseController {

    //if you have a constructor in other controllers you need call constructor of parent controller (i.e. BaseController) like so:

    public function __construct(){
       parent::__construct();
    }

    public function Index(Request $request ){
	
		
		$types = Type::orderBy('sort','type_desc')->paginate(2);
		
		$resources = [];
		$classes = [];
		
		foreach($types as $type){
		
		
			$resources[$type->id] = Resources::Where('type_id',$type->id)->get();
			
			foreach($resources[$type->id] as $resourcesIDs){
			
				$resId = $resourcesIDs->res_id;
			
				$classesDB = Classes::Where('res_id',$resId);
				
				if(Input::get('sort') == "price"){
					$classesDB->orderBy('price');
				}
			
				$classes[$resId] = $classesDB->get();
			}
			
		}
		
		$variables = ['types'=>$types , 'resources'=>$resources, 'classes'=>$classes, 'page'=>Input::Get('page')];
		
		if ($request->ajax()) {
			return view('charter.list', $variables);
		}
		
		
		return view('charter.index',$variables);
		
		/*print_r($types); exit;
		
		$classes = ::get();*/
	
    }

}

?>