<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Response;
class IndexController extends Controller{
    
    public function __construct() {
        $this->middleware('age');
    }

	public function index1($id){
		return Response::json($id);
	}
	
	public function index2(){
		return Response::json('as');
	}
}
?>