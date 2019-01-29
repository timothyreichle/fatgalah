<?php
namespace App\Http\Controllers;

use View;
use App\Models\Nav\Category;
use App\Models\Nav\SubCategory;
use App\Models\Nav\Item;


class BaseController extends Controller {

    public function __construct() {

	   $navCategories = Category::OrderBy('SortOrder')->get();
	   
	   $subCategories = [];
	   
	   foreach (SubCategory::OrderBy('SortOrder')->get() as $subCategory){
			$subCategories[$subCategory->CategoryID][] = $subCategory;
	   }
	   
	   $items = [];
	   
	   foreach (Item::OrderBy('SortOrder')->get() as $item){
			$items[$item->SubCategoryID][] = $item;
	   }
	
	
       View::share ( 'navCategories', $navCategories );
       View::share ( 'subCategories', $subCategories );
       View::share ( 'items', $items );
    }  

}

?>