<?php
namespace App\Http\Controllers;

use View;

class HomeController extends BaseController {

    //if you have a constructor in other controllers you need call constructor of parent controller (i.e. BaseController) like so:

    public function __construct(){
       parent::__construct();
    }

    public function Index(){
      //All variable will be available in views
      return view('welcome');
    }

}

?>